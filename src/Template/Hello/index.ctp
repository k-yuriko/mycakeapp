<!DOCTYPE html>
<html lang="ja">
  <head>
    <meta charset="utf-8">
    <title><?= $title ?></title>
  </head>
  <body>

    <h1><?= $title ?></h1>

    <div>
      <?= print_r($data) ?>
    </div><br>

    <?= $this->Form->create(null,[
      "type" => "post",
      "url" => ["controller" => "Hello", "action" => "index"]
    ]); ?>

      name<?= $this->Form->text("Form1.name"); ?><br>
      mail<?= $this->Form->text("Form1.mail"); ?><br>
      age<?= $this->Form->text("Form1.age");  ?><br>
      <?= $this->Form->radio("Form1.radio", [
        ["value" => "アイスホッケー", "text" => "アイスホッケー"],
        ["value" => "野球", "text" => "野球"],
        ["value" => "サッカー", "text" => "サッカー"]
      ]); ?><br>
      <?= $this->Form->select("Form1.select",
        ["キーパ〜ーー" => "キーパー", "フォワード" => "フォワード", "ディフェンス" => "ディフェンス"]) ?>
      <?= $this->Form->submit("クリック") ?>

    <?= $this->Form->end() ?>

  </body>
</html>
