PM演習のためのファイル置き場

##第3回の内容

https://github.com/taroyabuki/pmpractice/tree/master/sample

##第1回の宿題

###概要

演習用のリポジトリ（＝ファイル置き場）にファイルを追加する。

###作業

1. アカウントを作り、サインインする。
1. 演習用リポジトリをもとに、自分用のリポジトリを作る。方法：https://github.com/taroyabuki/pmpractice の「Fork」をクリックする。結果：https://github.com/自分のアカウント/pmpractice ができる。
1. 自分のグループのフォルダ（例：`yabuki-a`）に移動する。
1. ファイルを新たに作成し、バージョン管理する。方法：「+」アイコンをクリックして、ファイルを追加する。ファイル名は`学生番号.txt`（例：`123456.txt`）とする。ファイルの内容は任意。ただし、個人情報は書かない。結果：作成したファイルが画面に表示される。
1. 変更（ここではファイルの追加）を演習用リポジトリに反映するよう依頼する。方法：右にある「Pull Requests」のアイコンをクリック、「New pull requests」をクリック、「Create Pull Request」をクリック、適当なコメント（例：ファイルを追加したのでレビューしてください）を入力、「Send pull request」をクリックする。結果：Pull requestが教員に送信される。
1. 教員の反応を待つ。（1日以上かかる場合がある。）
1. 教員が変更を受け容れない場合：教員からのコメントが変えるから、それに対応する。方法：ファイルを修正してから、右にある「Pull Requests」のアイコンをクリック、既存のPull requestをクリック、コメントを追加する。
1. 教員が変更を受け容れる場合：「taroyabuki merged」と表示される。
1. https://github.com/taroyabuki/pmpractice に自分のファイルがあることを確認する。


###うまく行かないときは

「Settings」の「Delete this repository」で自分用のリポジトリを削除してから、再度挑戦する。

##今後の方針

以下の2つの方針のいずれかを採用するとよい。

###方針1

グループの代表者のみがhttps://github.com/taroyabuki/pmpractice をforkし、そうしてできたhttps://github.com/代表者のアカウント/pmpractice を他のメンバがforkする。メンバは代表者にpull requestsを送信する（この受け容れに教員は不要）。代表者がhttps://github.com/taroyabuki/pmpractice にpull requestsを送信し、教員に受け容れてもらう。

###方針2

グループの代表者のみがhttps://github.com/taroyabuki/pmpractice をforkし、そうしてできたhttps://github.com/代表者のアカウント/pmpractice を全員で共有する。そのためには、 https://github.com/代表者のアカウント/pmpractice/settings/collaboration で、グループのメンバを協力者として登録すればよい。これにより、メンバが代表者のリポジトリを更新できるようになる。（参考：[GitHub初心者はForkしない方のPull Requestから入門しよう](http://blog.qnyp.com/2013/05/28/pull-request-for-github-beginners/)）
