1. cp -R .env.example .env

	and create database 'laravel_auth_page_db'

	DB_DATABASE=laravel_auth_page_db
	DB_USERNAME=root
	DB_PASSWORD=

2. 	run php artisan migrate:refresh --seed

3.  run php artisan tinker 
	>>> factory(App\User::class, 19)->create(); -> creates 20 user with password 'secret'
	>>> factory(App\Employee::class, 19)->create(); creates 20 employee

4. login with your account or any using password 'secret'
5. Hit the button 'test' and you the current logged in user will save into table 'test' using traits custom TestTraits with method addNameToTestTable()