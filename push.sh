#!/bin/zsh
git add .
if [ $# -eq 0 ]; then
    git commit -m "$(date '+%Y-%m-%d %H:%M')"
else
    git commit -m "$* - $(date '+%Y-%m-%d %H:%M')"
fi
git push
read -p "Presiona Enter para continuar..."
