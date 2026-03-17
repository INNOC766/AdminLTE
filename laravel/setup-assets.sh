#!/usr/bin/env bash
#
# setup-assets.sh
# ---------------
# Run this script from inside your Laravel project root to copy
# AdminLTE assets into the public/ directory.
#
# Usage:
#   bash setup-assets.sh /path/to/AdminLTE/dist
#
# Example:
#   bash setup-assets.sh ../AdminLTE/dist

DIST=${1:-"../AdminLTE/dist"}

if [ ! -d "$DIST" ]; then
  echo "ERROR: dist folder not found at: $DIST"
  echo "Usage: bash setup-assets.sh /path/to/AdminLTE/dist"
  exit 1
fi

echo "Copying AdminLTE assets from $DIST → public/adminlte/ ..."

mkdir -p public/adminlte/css
mkdir -p public/adminlte/js
mkdir -p public/adminlte/img

cp "$DIST/css/adminlte.min.css"         public/adminlte/css/
cp "$DIST/css/adminlte.css"             public/adminlte/css/
cp "$DIST/css/adminlte.rtl.min.css"     public/adminlte/css/
cp "$DIST/js/adminlte.min.js"           public/adminlte/js/
cp "$DIST/js/adminlte.js"               public/adminlte/js/

if [ -d "$DIST/assets/img" ]; then
  cp -r "$DIST/assets/img/." public/adminlte/img/
fi

echo "Done! Assets copied to public/adminlte/"
