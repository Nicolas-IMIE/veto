#Dependance php
composer install

#Creation bdd
app/console doctrine:database:drop --force -q
app/console doctrine:database:create

#Structure bdd
app/console doctrine:database:update --force

#clear cache
app/console cache:clear