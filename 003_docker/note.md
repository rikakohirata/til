### Volume

- ボリュームとは

  - データを永続的に管理できる場所のこと

  ```
  コンテナを削除または更新した場合、コンテナ内のデータは消えてしまう
    ↓
  データを永続化したい場合、コンテナ外にデータを置く（ = ボリューム）
    〇 複数のコンテナ間で共有
    〇 ホスト間で移行
  ```

- ボリュームの種類

  - 名前付きボリューム：ユーザー定義の任意の名前を持つ

    ```bash
    docker volume create <ボリューム名>
    ```

  - 匿名ボリューム：自動で一意の ID が割り当てられる

- Tips

  - Docker のデータディレクトリを確認

    ```bash
    docker info | grep "Docker Root Dir"
    ```

  - ボリューム一覧を表示

    ```bash
    docker volume ls
    ```

  - ボリューム詳細を表示

    - Mountpoint：ホストマシン上のボリュームの実際のパス

    ```bash
    docker volume inspect <ボリューム名>
    ```

    - ボリュームを削除

    ```bash
    docker volume rm <ボリューム名>
    ```

    - 未使用のボリュームを削除

    ```bash
    docker volume prune
    ```
