#!/usr/bin/env bash
set -euo pipefail

ROOT_DIR="$(cd "$(dirname "${BASH_SOURCE[0]}")/.." && pwd)"
TEMPLATE_DIR="$ROOT_DIR/templates/vavip"

php -l "$TEMPLATE_DIR/index.php"

if command -v xmllint >/dev/null 2>&1; then
  xmllint --noout "$TEMPLATE_DIR/templateDetails.xml"
else
  python - "$TEMPLATE_DIR/templateDetails.xml" <<'PYCODE'
import sys
from xml.etree import ElementTree as ET

try:
    ET.parse(sys.argv[1])
except ET.ParseError as exc:
    raise SystemExit(f"XML validation failed: {exc}")
PYCODE
fi

if [ ! -s "$TEMPLATE_DIR/css/style.css" ]; then
  echo "CSS file is missing or empty" >&2
  exit 1
fi

if [ ! -s "$TEMPLATE_DIR/js/main.js" ]; then
  echo "JS file is missing or empty" >&2
  exit 1
fi

grep -q "bootstrap@5.3.3" "$TEMPLATE_DIR/index.php" || { echo "Bootstrap CDN version mismatch" >&2; exit 1; }

grep -q "https://fonts.googleapis.com/css2?family=Inter" "$TEMPLATE_DIR/index.php" || { echo "Inter font link missing" >&2; exit 1; }

echo "All template checks passed."
