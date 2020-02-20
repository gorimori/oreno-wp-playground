# oreno-wp-playground

```sh
# wp-cliのインストール
# https://make.wordpress.org/cli/handbook/installing/ を参考にwp-cli.pharをダウンロード
$ chmod u+x ./wp-cli.phar
$ ln -sf $(realpath ./wp-cli.phar) ~/bin/wp

# WordPress本体のインストール
# 日本語 & デフォルトのテーマをインストールしない
$ wp core download --locale=ja --skip-content
```
