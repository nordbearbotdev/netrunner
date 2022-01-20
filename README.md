## Что такое NetRunner ?

NetRunner используется для отслеживания ip-адреса. NetRunner разработан для систем на базе Termux и Linux. вы можете легко получить информацию об ip-адресе с помощью NetRunner. NetRunner использует ip api для отслеживания IP-адреса.

<p align="center">
<img width="47%" src="src/Screenshot_2018-08-06-15-32-17-1.png"/>
<img width="40%" src="src/Screenshot_2020-05-17-20-52-59-1.png"/>
</p>

## Как установить NetRunner ?

* `apt update`

* `apt install git -y`

* `git clone https://github.com/nordbearbotdev/NetRunner.git`

* `cd NetRunner`

* `chmod +x install`

* `sh install` or `./install`


## Как использовать NetRunner

* `trace -m` чтобы отследить ваши IP адреса.

* `trace -t target-ip` чтобы отследить другие IP адреса. Например `NetRunner -t 127.0.0.1`

* `trace` чтоб узнать больше информации

**OR**

* `NetRunner -m` to track your own ip address.

* `NetRunner -t target-ip` to track other's ip address for example `NetRunner -t 127.0.0.1`

* `NetRunner` for more information.

