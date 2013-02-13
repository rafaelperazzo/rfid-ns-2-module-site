#scp * perazzo@ime.usp.br:www
rsync -Cravzpu --del --exclude 'tex' --exclude '*.no' --exclude '*.bak' --exclude '*.dia' /home/rafael/Dropbox/rafael/usp/ns-2 perazzo@ime.usp.br:www
rm -f END
echo $(date) >> END
