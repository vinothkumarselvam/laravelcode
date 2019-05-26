# laravel new project_name
# composer install
--- Install all required libraries from composer --
--- it update in the composer.json file ---

# composer update
--- this comment is used to update the required libraries from composer---

# View terminals (View ->  terminals)

# robots.txt 
--- it used for google SEO (Search enging optimization) --
--- to hide some information in out application ---


# php artisan serve
--- First the ping the public/index.php file ---

# Controller file 
app/http/controller file availabel

# MVC (Model View Controller)

Model       : (app/)
Views       : (resource/views)
Controllers : (app/http/controller)


# blade
--- blade is template engine html --
--- save all file with .blade.php formate (ex: aboutus.blade.php) --
--- write php code easy in blade template ---
ex: 
@if($user)
    <h2> Hi user {{ $user->username  }} </h2>
@else
        <h2> Hi Guest</h2>
@endif


# important Points
1, Laravel doesn't work in offline mode
2, REST API : Status code information 

# @extends('layouts.app') 
--- include layouts/app.blade.php content in any page using this command


