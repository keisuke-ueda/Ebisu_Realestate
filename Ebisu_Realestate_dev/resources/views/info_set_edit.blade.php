<style>
  label {
    display: inline-block;
    width: 120px;
    text-align: end;
    font-weight: bold;
    margin-right: 10px;
  }
  .info_column {
    margin-bottom: 30px;
    display:flex;
    align-items:center;
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

<div style="width: 1000px; margin:150px auto 0;">

  <div>
      <div class="info_column">
        <label for="">見出し</label>
        <input type="text" name="summary" value="@if(isset($info)){{ $info->summary }}@endif" style="width:870px" form="update" required>
      </div>
      <div class="info_column">
        <label for="">表示日付</label>
        <input type="date" name="date" value="@if(isset($info)){{ $info->date }}@endif" form="update" required>
      </div>
      <div class="info_column">
        <label for="">公開ステータス</label>
        <input type="radio" name="status" value="公開" form="update" <?php if(isset($info) && $info->status=="公開") { echo "checked"; } ?>>公開
        <input type="radio" name="status" value="非公開" form="update" style="margin-left:15px;" <?php if((isset($info) && $info->status=="非公開") || !isset($info)) { echo "checked"; } ?>>非公開
      </div>
      <div class="info_column">
        <label for="">new</label>
        <input type="radio" name="new" value="あり" form="update" <?php if((isset($info) && $info->new=="あり") || !isset($info)) { echo "checked"; } ?>>あり
        <input type="radio" name="new" value="なし" form="update" style="margin-left:15px;" <?php if((isset($info) && $info->new=="なし")) { echo "checked"; } ?>>なし
      </div>
      <div class="info_column">
        <label for="">投稿内容</label>
        <textarea name="content" style="width:870px" rows="6" form="update" required>@if(isset($info)){{ $info->content }}@endif</textarea>
      </div>

      <div style="display:flex; justify-content:flex-end;">
        <form action="{{ route('info_set.update') }}" method="post" id="update">
        @csrf
          @if(isset($info))
          <input type="hidden" name="id" value="{{ $info->id }}">
          <input type="hidden" name="action" value="update">
          @else
          <input type="hidden" name="action" value="create">
          @endif
          <button>保存</button>
        </form>
        <button onclick=history.back() style="margin-left:20px;">戻る</button>
      </div>
    
  </div>

</div>

