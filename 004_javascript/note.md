[モダン JavaScript](#モダン-javascript)

## モダン JavaScript

- 概要

  - JavaScript の最新の標準やプラクティスを指す
  - ECMAScript6（ES6）以降の標準を基にしている

- 従来の JavaScript

  - バニラ Script
  - 素の JavaScript

- 特徴

  - アロー関数

    - 簡潔でシンプルな構文

      ```javascript
      // 通常の関数
      function test(a, b) {
        return a + b;
      }

      // アロー関数
      const test = (a, b) => a + b;
      ```

  - let と const

    - var の代わりに let と const を使った変数宣言

      ```javascript
      let test1 = 10;
      const test2 = 20;
      ```

      **💡 使い分けの方針**

      - React では、基本的に `const` を使って変数宣言を行う
      - 動的に変わるものは `State` に入れる
      - State に入れず、動的に変わるものは `let` を使う

  - 分割代入

    - オブジェクトや配列から特定の値を取り出す分割代入

      ```javascript
      // オブジェクトの分割代入
      const profile = { name: "John", age: 30 };
      const { name, age } = profile;

      // 配列の分割代入
      const numbers = [1, 2, 3, 4, 5];
      const [first, second] = numbers;
      ```

  - クラス構文

    - class キーワードを用いたクラスベースのオブジェクト指向プログラミングのサポート向上

      ```javascript
      // クラスの定義
      class Profile {
        constructor(name, age) {
          this.name = name;
          this.age = age;
        }

        sayHello() {
          // 処理
        }
      }
      ```

  - モジュールのインポート・エクスポート

    - import と export キーワードによりモジュールシステムがサポート

      ```javascript
      // モジュールのエクスポートとインポート
      export { Profile };

      // 別のファイルでインポート
      import { Profile } from "./****";
      ```

  - プロミス

    - 非同期プログラミングをサポートする Promise オブジェクトが導入

      ```javascript
      async function fetchData() {
        const response = await fetch("https://example.com/api/data");
        const data = await response.json();
        console.log(data);
      }
      ```

  - テンプレートリテラル

    - バックティックを使用したテンプレートリテラル

      ```javascript
      const url = `https://example.com/api/${id}`;
      ```
