# SELECT
SELECTは検索を行うための一番基本的な構文.
```sql
  SELECT * FROM `table_name` WHERE 1
```

## SELECT
「何を」取得するカラム名を指定します。
```sql
  SELECT * -- すべてのカラム
  SELECT `name` -- 名前が「name」のカラム
  SELECT `name`,`mail` -- 名前が「name」のカラムと「mail」のカラム
```
## FROM
「どこから」取得するのかテーブルの名前を指定します。
```sql
  SELECT * FROM `member` -- 「member」という名前のテーブル
```
## WHERE
「どの」データか指定します。
```sql
  SELECT * FROM `member` WHERE 1 -- 特別な条件なしにすべてのデータを取得します。
  SELECT * FROM `member` WHERE `name` = "KIMIKO WATANABE" -- 「name」が"KIMIKO WATANABE"のデータを取得します。
  SELECT * FROM `member` WHERE `age` < 20 -- 「age」が20以下のデータを取得します。
```
### AND / OR
```sql
```
### IS NULL / IS NOT NULL
```sql
```
### LIKE
```sql
```
### IN / NOT IN
```sql
```
