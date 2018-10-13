<div style="margin:0px 50px 0px 50px;">
  @if($news)
  <a href="{{route('newsAdd')}}"><button class="btn btn-success">Добавить новость</button></a>
  <div class="col col-4 padding-top-15">
    <div class="input-group">
      <span class="input-group-addon"><i class="fa fa-search"></i></span>
      <input class="form-control" id="myInput" placeholder="Введите Название новости"  onkeyup="myFunction()" style="width: 17%">
      <span class="input-group-btn"></span>
    </div>
  </div>
    <table class="table table-hover table-striped" id="myTable">
        <thead>
        <tr>
            <th>№</th>
            <th>Название</th>
            <th>Описание</th>
            <th>Дата публикации</th>
            <th>Аватарка</th>
            <th>Удалить</th>
        </tr>
        </thead>
        <tbody>

          <?php foreach ($news as $key => $value): ?>
          <tr>
            <td>{{$value->id}}</td>
            <td><a href="{{route('newsEdit', ['route'=>$value->id])}}" alt="{{$value->name}}">{{$value->name}}</a></td>
            <td>{{$value->description}}</td>
            <td>{{$value->created_at}}</td>
            <td>{{$value->image}}</td>
            <td>
              <form action="{{route('newsEdit', ['route'=>$value->id])}}" class="horizontal" method="post">
                {{ csrf_field() }}
                <input type="hidden" name="_method" value="DELETE">
                <button class="btn btn-danger" type="submit">Удалить</button>
              </form>
            </td>
          </tr>
          <?php endforeach; ?>
        </tbody>
    </table>
    {{$news->links()}}
  @endif
</div>
<script>
  function myFunction() { 
    var select, filter, table, tr, td, i;
    select = document.getElementById("myInput");
    filter = select.value.toUpperCase();
    table = document.getElementById("myTable");
    tr = table.getElementsByTagName("tr");
    for (i = 0; i < tr.length; i++) {
      td = tr[i].getElementsByTagName("td")[1];
        if(td) {
          if(td.innerHTML.toUpperCase().indexOf(filter) > -1) {
              tr[i].style.display = "";
            }
          else {
            tr[i].style.display = "none";
          }
        } 
    }
  }
</script>