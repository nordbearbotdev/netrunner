<?php
include("modules/trm.php");
include("modules/help.php");
include("modules/trip.php");

function logo() {
  system("clear");
  echo <<<EOL
\033[01;33m


\033[01;31m      _\033[01;33m 
     \033[01;31m(_)\033[01;33m 
     
 ███▄    █ ▓█████▄▄▄█████▓ ██▀███   █    ██  ███▄    █  ███▄    █ ▓█████  ██▀███  
 ██ ▀█   █ ▓█   ▀▓  ██▒ ▓▒▓██ ▒ ██▒ ██  ▓██▒ ██ ▀█   █  ██ ▀█   █ ▓█   ▀ ▓██ ▒ ██▒
▓██  ▀█ ██▒▒███  ▒ ▓██░ ▒░▓██ ░▄█ ▒▓██  ▒██░▓██  ▀█ ██▒▓██  ▀█ ██▒▒███   ▓██ ░▄█ ▒
▓██▒  ▐▌██▒▒▓█  ▄░ ▓██▓ ░ ▒██▀▀█▄  ▓▓█  ░██░▓██▒  ▐▌██▒▓██▒  ▐▌██▒▒▓█  ▄ ▒██▀▀█▄  
▒██░   ▓██░░▒████▒ ▒██▒ ░ ░██▓ ▒██▒▒▒█████▓ ▒██░   ▓██░▒██░   ▓██░░▒████▒░██▓ ▒██▒
░ ▒░   ▒ ▒ ░░ ▒░ ░ ▒ ░░   ░ ▒▓ ░▒▓░░▒▓▒ ▒ ▒ ░ ▒░   ▒ ▒ ░ ▒░   ▒ ▒ ░░ ▒░ ░░ ▒▓ ░▒▓░
░ ░░   ░ ▒░ ░ ░  ░   ░      ░▒ ░ ▒░░░▒░ ░ ░ ░ ░░   ░ ▒░░ ░░   ░ ▒░ ░ ░  ░  ░▒ ░ ▒░
   ░   ░ ░    ░    ░        ░░   ░  ░░░ ░ ░    ░   ░ ░    ░   ░ ░    ░     ░░   ░ 
         ░    ░  ░           ░        ░              ░          ░    ░  ░   ░     
                                                                                  



   \033[01;37m}\033[01;31m----------------------------------------\033[01;37m{
}\033[01;31m-------------- \033[01;32mСделано @HackSploitt\033[01;31m --------------\033[01;37m{
   }\033[01;31m----------------------------------------\033[01;37m{

\033[00m
EOL;
}

function About() {
  logo();
  echo <<<EOL

         \033[01;33mTool Name \033[01;37m:- \033[01;36mNetRunner
         \033[01;33mAuthor \033[01;37m:- \033[01;36m@HackSploitt
         \033[01;33mPowered By \033[01;37m:- \033[01;36m Software's

 \033[01;33mNetRunner\033[01;32m is use \033[01;36mip-api \033[01;32mto retrive any ip address information. Our system will automatically ban any IP addresses doing over 150 requests per minute.\033[00m


EOL;
  $getact = readline('  NetRunner >> ');
  menu();
}

function upd() {
  logo();
  echo "\n\033[01;32mUpdating NetRunner.........\033[01;37m\n\n";
  sleep(1);
  system("cd ~/ && git clone https://github.com/nordbearbotdev/NetRunner.git");
  system("cd ~/ && sudo git clone https://github.com/nordbearbotdev/NetRunner.git");
  system("cd ~/NetRunner && sh install");
  logo();
  echo "\n\033[01;32m              NetRunner updated !!!\033[01;37m\n";
  sleep(1);
  menu();
}

function menu() {
  logo();
  echo "   \033[01;32m[ \033[01;37m1 \033[01;32m] \033[01;33mОтследить IP адрес.\n";
  echo "   \033[01;32m[ \033[01;37m2 \033[01;32m] \033[01;33mОтследить мой IP адрес\n";
  echo "   \033[01;32m[ \033[01;37m3 \033[01;32m] \033[01;33mО Программе.\n";
  echo "   \033[01;32m[ \033[01;37m4 \033[01;32m] \033[01;33mПомощь.\n";
  echo "   \033[01;32m[ \033[01;37m5 \033[01;32m] \033[01;33mОбновить NetRunner.\n";
  echo "   \033[01;32m[ \033[01;37mx \033[01;32m] \033[01;33mВыйти \n\n\033[00m";
  $inp = readline('  NetRunner >> ');
  if ($inp=="x" || $inp=="exit") {
    echo "\n\033[01;31m  Выход .......\033[00m\n";
    sleep(1);
    echo "\033[01;32m  Пока ....... :)\n\n\033[00m";
    exit();
  } else if ($inp=="1") {
    trac();
  } else if ($inp=="2") {
    tracm();
  } else if ($inp=="3") {
    About();
  } else if ($inp=="4") {
    help();
  } else if ($inp=="5") {
    upd();
  } else {
    echo "\n  \033[01;31mErr : Неправильная команда \033[01;32m'$inp'\033[00m";
    sleep(1);
    menu();
  }
}
menu();
?>
