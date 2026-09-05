input="/var/www/html/rem2.txt"

while IFS= read -r line
do
  sudo rm -rf $line
done < "$input" 
