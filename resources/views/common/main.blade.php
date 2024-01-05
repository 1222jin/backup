@section('main')
<div class="wrapper">
    
        <div class="content-wrapper px-4 py-2">
                <h2>Users</h2>
                <div style="width: 90%; border: 1px solid #ccc;">
                    <div class="flex-container">
                        <p class="left-item">Users</p>
                        <div class="right-item">
                            <!-- modal のトリガー-->
                            <button type="button" class="register-button btn btn-primary" data-toggle="modal" data-target="#exampleModal">
                            新規作成
                            </button>
                        </div>
                    </div>
                    <div class="main">
                        <table>
                            <thead>
                                <tr>
                                    <th>Name</th>
                                    <th>Email</th>
                                    <th colspan="2"></th>
                                </tr>
                            </thead>
                            <tbody>
                                @foreach($test_sample as $sample)
                                <tr>
                                    <td>{{$sample->name}}</td>
                                    <td> {{$sample->email}}</td>
                                    <td>
                                        <button type="value" class="register-button btn btn-dark" data-user-id="{{$sample->id}}" data-user-name="{{$sample->name}}" data-user-email="{{$sample->email}}" data-toggle="modal" data-target="#exampleModal1">削除</button>
                                    </td>
                                    <td > 
                                        <button type="button" class="btn btn-primary" data-toggle="modal" data-target="#updateModal">更新</button> 
                                    </td>
                                    <!-- 削除ボタン-->
                                    
                                    
                                </tr>
                                @endforeach
                                
                            </tbody>
                        </table>
                    </div>
                </div>
                @include('common.update')
                @include('common.delete')
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" role="dialog" aria-labelledby="exampleModalLabel" aria-hidden="true">
                <div class="modal-dialog" role="document">
                    <div class="modal-content">
                    <div class="modal-header">
                        <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                        <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                        </button>
                    </div>
                    <div class="modal-body">
                    <form action="{{ url('/index/add')}}" method="POST" class="form-horizontal">
                                {{ csrf_field() }}
                                <div class="mb-3">
                                <label for="recipient-name">名前：</label>
                                <input type="text" class="form-control border border-primary" name="name">
                                </div>
                                <div class="mb-3">
                                <label for="recipient-name">email：</label>
                                <input type="text" class="form-control border border-primary" name="email">
                                </div>
                                <div class="mb-3">
                                <label for="recipient-name">パスワード：</label>
                                <input type="text" class="form-control border border-primary" name="password">
                                </div>
                    </div>
                    <div class="modal-footer">
                                <button type="submit" name="add" class="btn btn-primary">
                                追加
                                </button>
                        </form>
                        <button type="button" class="btn btn-secondary" data-dismiss="modal">Close</button>
                        
                    </div>
                    </div>
                </div>
                </div>

    
</div>