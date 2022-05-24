<style>
  table {
    border-collapse: collapse;
    border-spacing: 0;
    width: 100%;
    text-align: center;
    margin-top: 50px;
  }
  table th {
    border-bottom: 2px double #000;
  }
  table td {
    background: #fff;
    border: none;
    padding: 10px 0;
  }
  table tr:nth-child(odd) td {
    background: #ddd;
  }
  form {
    margin: 0;
  }
  button {
    background-color:#000; 
    color:#fff;
    padding: 5px 10px;
    cursor: pointer;
  }
</style>

<div style="width: 1000px; margin:80px auto;">
  <div style="display:flex; justify-content:;">
    <form action="/info_set/logout" method="post">
      @csrf
      <button>ログアウト</button>
    </form>
    <form action="/info_set/edit" method="post">
      @csrf
      <button style="margin-left: 30px;">新規作成</button>
    </form>
  </div>
  <table>
    <tbody>
      <tr>
        <th>id</th>
        <th>表示日付</th>
        <th>投稿見出し</th>
        <th>公開ステータス</th>
        <th>new</th>
        <th></th>
        <th></th>
      </tr>
      @foreach ($all_info as $info)
      <tr>
        <td>{{ $info->id }}</td>
        <td>{{ $info->date }}</td>
        <td>{{ $info->summary }}</td>
        <td>{{ $info->status }}</td>
        <td>{{ $info->new }}</td>
        <td>
          <form action="/info_set/edit" method="post" id="update_{{ $info->id }}">
            @csrf
            <input type="hidden" name="info_id" value="{{ $info->id }}" form="update_{{ $info->id }}">
            <button style="">更新</button>
          </form>
        </td>
        <td>
          <form action="{{ route('info_set.delete') }}" method="post" id="delete_{{ $info->id }}">
            @csrf
            <input type="hidden" name="id" value="{{ $info->id }}" form="delete_{{ $info->id }}">
            <button class="info_delete_btn" style="">削除</button>
          </form>
        </td>
      </tr>
      @endforeach
    </tbody>
  </table>
</div>

<script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
<script>
  $('.info_delete_btn').on('click', function() {
    if(confirm("選択した投稿を削除しますか？")) {
      return true;
    } else {
      return false;
    }
  });
</script>