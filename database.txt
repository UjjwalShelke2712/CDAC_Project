SOURCE_LOGS="/var/log"
SOURCE_CONFIG="/etc"

DESTINATION="backup-server@192.168.216.140:/home/backup-server/bash_backup_dbserver"

#ssh backup-server@192.168.216.140 

sudo rsync -avz --progress $SOURCE_LOGS/ $DESTINATION/logs/
read "sunbeam"
sudo rsync -avz --progress $SOURCE_CONFIG/ $DESTINATION/config/
read "sunbeam"

echo "Backup completed successfully to $DESTINATION"

