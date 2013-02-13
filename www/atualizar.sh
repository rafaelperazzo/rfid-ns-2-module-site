cp atualizar.sh www/
now=$(date '+%d/%m/%Y %H:%M')
git add www
git commit -a -m "Version $now"
git push origin master --force
