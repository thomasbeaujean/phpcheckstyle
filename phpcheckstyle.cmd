echo "PHP Checkstyle script"
php -c C:\ms4w\Apache\cgi-bin\php.ini run.php --src ./test/closure_in_string.php --outdir ./checkstyle_result --format html,xml --linecount --debug
pause
