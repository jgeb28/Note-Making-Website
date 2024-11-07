# Note-Making-Website
Simple website for making notes. It`s my first project created using Laravel Framework.\
You can create, delete, view or edit notes assigned to your account.

# Usage
Docker Engine or Docker Desktop is required to open!
## 
Open PowerShell in Windows or Terminal in Linux and write commands below:
- cd Note-Making-Website/note-webs/ 
- docker compose up -d  \*After using this command wait until server starts\*
- docker exec laravelApp composer install
- cp .env.example .env
- ./vendor/bin/sail up -d
- ./vendor/bin/sail artisan migrate
Now you can access the website at address localhost.
#
There is basic account with 100 random generated notes\
with email = "test@example.com" and password = "123"

