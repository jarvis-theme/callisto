<!DOCTYPE html>
<html lang="en">
    <head>
        {{ Theme::partial('seostuff') }} 
        {{ Theme::asset()->styles() }} 
        {{ Theme::partial('defaultcss') }} 
    </head>
    <body>
        <div class="main-body-wrapper">
            {{ Theme::partial('header') }} 

            <div class="main-content-wrapper">
                {{ Theme::place('content') }} 
            </div>

            {{ Theme::partial('footer') }} 
            {{ Theme::partial('defaultjs') }} 
        </div>
        {{ Theme::partial('analytic') }} 
    </body> 
</html>