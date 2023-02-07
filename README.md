# Delicious-Stadium

野球場のスタジアムグルメを写真投稿するサイトです。<br>
感想とともに投稿・共有が可能となっております。<br>
以下、トップページ画像<br>
<img width="900" alt="home" src="https://user-images.githubusercontent.com/113589848/217163475-2fdc3e18-6cdb-48ba-9dee-69d2015fcc42.png"> <img width="900" alt="example" src="https://user-images.githubusercontent.com/113589848/217163621-d5ac4077-da91-47c5-9bd4-c2addfb0e711.png">
<img width="900" alt="footer" src="https://user-images.githubusercontent.com/113589848/217163722-d4e8389d-eb82-42bc-99ef-4dfddaedf820.png">

# 作成背景

プログラミングスクールでブログを作った経験を活かして、Instagram風の写真投稿サイトを作りたいと感じました。<br>
それにあたって、自分の趣味である野球観戦に欠かせないスタジアムグルメを共有する専用のサイトがあれば良いな、という思いから今回のサイト作成に至りました。

# 使用技術

・AWS Cloud9

・Laravel Framework 9.38.0

・PHP 8.0.2

・MariaDB

・Google Login API

# 機能説明

## 機能

・ユーザー登録、ログイン機能（API連携：Googleログイン）　　

・投稿機能（画像、感想）　　

・投稿編集機能　　

・投稿削除機能　　

・コメント機能　　

・いいね機能　　

・フォロー機能　　

## 工夫点

・投稿者のみが削除機能を使えたり、投稿者以外がコメント機能やいいね機能を使えたりといった区別ができるようにしました。

・投稿のバリデーションやコメントのバリデーションで文字数制限を設けて文字数が超過すると警告メッセージが出るようにしました。

・LaravelライブラリのCloudinaryという外部の画像ストレージサービスを用いて、ファイルの初期化に伴うデータの消去が無いようにしました。

# 使い方

## 基本的な機能の使い方

トップページ下のログイン、新規登録ボタンを押すと現れるログイン画面からログイン（ログイン機能）

<img width="460" alt="login" src="https://user-images.githubusercontent.com/113589848/217163743-6653a382-1acc-4119-82cc-5ec9264950f5.png">　　<img width="450" alt="register" src="https://user-images.githubusercontent.com/113589848/217163764-7dd75ad4-815a-4cf1-875d-4cca83713582.png">

↓

ログイン後は、投稿一覧画面に遷移します。ここでは、他人の投稿に「いいね」をつけることができます。（いいね機能）

<img width="650" alt="view" src="https://user-images.githubusercontent.com/113589848/217163788-f2456b39-114b-4dc6-a2db-52210b6bb1cd.png">

↓

投稿一覧画面上部バーの中心にある「新規投稿」を押すと、投稿画面に遷移します。<br>
タイトル、感想、写真を追加すると投稿が可能になります。（投稿機能）

<img width="650" alt="post" src="https://user-images.githubusercontent.com/113589848/217163808-c707f530-79f1-4a03-a721-c146acee9dbb.png">

## その他の機能の使い方

投稿一覧画面のグルメ画像をタップすると、投稿詳細画面に遷移します。<br>
ここでは、他人の投稿に対してコメントをすることが可能です。（コメント機能）

<img width="650" alt="show" src="https://user-images.githubusercontent.com/113589848/217163963-a01cff46-d364-407a-90f3-e237026a6c84.png">

投稿一覧画面のグルメ画像下の青文字（ユーザー名）をタップすると、投稿者の詳細画面に遷移します。<br>
ここでは、その投稿者の投稿のみが閲覧可能で、フォローをすることもできます。（フォロー機能）

<img width="650" alt="user" src="https://user-images.githubusercontent.com/113589848/217163999-f7c0877b-d6c2-44d2-9880-0a15d86d5478.png">

自分のユーザー名をタップすると、自分の詳細画面に遷移します。<br>
自分の投稿には、いいねボタンの代わりに、編集・削除ボタンが備わっています。<br>
このボタンを押すと、投稿編集画面に遷移して、編集が可能になります。（投稿編集、削除機能）

<img width="490" alt="user1" src="https://user-images.githubusercontent.com/113589848/217222010-f08a22e7-cd78-4b96-9551-f1f5d8034d33.png">　　<img width="470" alt="edit" src="https://user-images.githubusercontent.com/113589848/217163923-c265c74d-44c8-440e-b1f1-ebeae636d687.png">


# 感想・改善点

プログラミング初学者ということで、投稿の機能面などバックエンドの部分はプログラミングスクールで得た知識を流用した部分が多かったが、サイトのUIなどのフロントエンドの部分は、Bootstrapを独自で取り入れて少しでも見やすいサイトを目指しました。<br>

今後の改善点としては、まず、トップページ以外のデザインの完成度が低いので、HTML・CSSの勉強をしながらより見やすいデザインを目指していきたいです。<br>

機能面では、投稿画面に球場のカテゴライズ機能をつけて、投稿一覧画面で球場ごとのグルメの投稿を見ることができるようにしたいです。<br>

また、ブックマーク機能のようなもので、自分のお気に入りの投稿をいつでも見直せるようにしたいと考えています。<br>

最終的に目指すサイトの形は、野球場のグルメ専用のサイトであるという特性を活かして、コメント機能などを通じて野球観戦が好きなユーザー同士の繋がりが生まれるサイトというのが理想です。
