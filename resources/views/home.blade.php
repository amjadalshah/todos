@extends('layouts.app')
@section('title', 'Todos')
@section('content')

                <button type="button" class="btn btn-primary w-25 mt-2" data-bs-toggle="modal" data-bs-target="#exampleModal">
                    add new todo
                </button>
                <!-- Modal -->
                <div class="modal fade" id="exampleModal" tabindex="-1" aria-labelledby="exampleModalLabel" aria-hidden="true">
                    <div class="modal-dialog">
                        <form action="create" method="post">
                            @csrf
                            <div class="modal-content">
                                <div class="modal-header">
                                <h5 class="modal-title" id="exampleModalLabel">Modal title</h5>
                                <button type="button" class="btn-close" data-bs-dismiss="modal" aria-label="Close"></button>
                                </div>
                                <div class="modal-body">
                                        <div class="mb-3">
                                            <label for="exampleFormControlInput1" class="form-label">Todo Name</label>
                                            <input type="text" class="form-control" id="exampleFormControlInput1" name="name">
                                        </div>
                                        <div class="mb-3">
                                            <label for="exampleFormControlTextarea1" class="form-label">Todo Description</label>
                                            <textarea class="form-control" id="exampleFormControlTextarea1" rows="3" name="description"></textarea>
                                        </div>
                                </div>
                                <div class="modal-footer">
                                <button type="button" class="btn btn-secondary" data-bs-dismiss="modal">Close</button>
                                <button type="submit" class="btn btn-primary">Save changes</button>
                                </div>
                            </div>
                        </form>
                </div>
                </div>
                @if (session()->has('success'))
                    <div class="alert alert-success" role="alert">
                        {{ session()->get('success') }}
                    </div>
                @endif
                <div class="card-header"><h1 class="text-center">All Todos</h1></div>
                <div class="card-body">
                    <ul class="list-group">
                        @forelse ($todos as $todo)
                            <li class="list-group-item d-flex justify-content-between">
                                <div> {{ $todo -> todo_name }} </div>
                                <div class="btns">
                                    <a href="{{ $todo -> id }}/delete" class="pe-2">
                                        <img style="width:15px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAAEAAAABACAYAAACqaXHeAAAABmJLR0QA/wD/AP+gvaeTAAADD0lEQVR4nO2bwW9MQRzHP69rY1scHKgDCdGmjsSRg0QdaCSu6uwkweo/0D+gGiGOLFbj6s7Bf4CToCUpGm2w6RJKIuswXW927T5v5r2Z3246n2SSeS/zm/nOb+c3M2/fvAi3jABngIKl/W/gITCfmyLPzAONjOmVS4EDLitHdaCniRzXPwKcBbZY2n8DHgALuSkKBAI6aeeAIWAcFdNFd3Jy4RdqzngMfM9aWQRMATWyL2e+Uw0ok2Gij4D7PdCRrKma5IQk70wBM9r1G9SwqiXY9ALbgRPAPu1eGbhmUskQrcP+NlDKSaAPSkCFWP8XYNCkgtOa8QL91fkmJdSobfZjolOhblvhMS3/CFjLVZof1lAh22SsU6FuDtD38K63yy6JuuT/0s0B+hPYOP0bAse165cmxu2TYIX+ckIJuEOs/xOqT/+QNLzLwKx2/RYVU73+ZLYftQzu1e4ZL4OgnFNFfiOTNd0lw/8eEXAZtY5Kd8Q0fQYu8p9JPO0MP4iaUEaB4ZQ2vjkKHFnPV4ALwA85Of6ZJv71p9Mauf5PsOfZ8A7YZFB2AJhcz8/RulvsW0wcMIlaFkF1fi5/Of4xCYERLT+atxApTEaADbZh4y3cXDvANmy8hZvrVcA2bLyF24ZfBoMDpAVIExwgLUCa4ABpAdIEB0gLkCY4QFqANMEB0gKkCQ6QFiBNcIC0AGmCA6QFSBMcIC1AmuAAg7JftfzWlDb6tz6vDdqysdum5etpGzJ5MbKk5XentGm+1WmgvvxIi43dHi2/1LVUBg4Ti/pIb4VPAVgh1nfIRSMR8F5r5KSLRiyZINa1iMPDnbNaQ09x/24xDUXgObGumeTi2dgBrGqNXXfZWEpuEuup4+EQ1xVaj6PdQGYkFGntfAO45KPhTl+SPANOYf+JrAkFVMzrw74B3LOpzHay2AzcAs613V8BngAfgGXLursxjFp+j6FCUacKnAd+5txmIhHqDG4dudOgq3ga9knsBK4C7/DX8UXUbN8+EozJc72MgIPAAWAX+c/Gy6gN2Avi+M/MH4bGmpju13L7AAAAAElFTkSuQmCC"/>
                                    </a>
                                    <a href="{{ $todo -> id }}/edit" class="pe-2">
                                        <img style="width:15px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAAAhElEQVRIie2TwQnAIAxF35Klh3YBdxDqPh3HQdq7gj00ooi3xkvxQ0BzeD8JfJh6ZYEbWEfAHZCkIrCPgAfgrN4qm9STG+llk0sTngAvJkH+VgMeBOobM6cFz3c22vAIbNJbKGc5JnzCfwCHEpgcorWCfwpRawDKk7cGdanBewaq8KmuHlYrZbGe+TNUAAAAAElFTkSuQmCC"/>
                                    </a>
                                    <a href="{{ $todo -> id }}">
                                        <img style="width:15px" src="data:image/png;base64,iVBORw0KGgoAAAANSUhEUgAAABgAAAAYCAYAAADgdz34AAAABmJLR0QA/wD/AP+gvaeTAAABBUlEQVRIid2VOwrCQBRFj5/KxkrUBVi6EO2UVOIi/NSCpY3ghsTPAoRsQRsLOwNqFYs8EWVmfM5g44UhMPe+OW/yAoF/VBs4AOmHNfUFaA4PgjyKNZkUmP0a8DXEB/AVxBdghOQsxTbvPWPSS13R1ab2EBc07wlQy/cGJpWAhiaoGbJaoa8oArZAImsDdD8VaW+wwP65zkMBkWQuwACoAXVgKHsp0AkBbCUzMHgj8dYhgEQyNYNXFe8M/kN2NVCQ5y0EsJNnz+A99mJbseuHM5FMl+eQR2QDrgNj4Cpe3wZoAXsL4AiUJTd3NJLKDSo2iFYdYEU29BOwlM5jgSxDATZV5PDmHUJTf/Q0eaTQAAAAAElFTkSuQmCC"/>
                                    </a>
                                </div>
                            </li>
                        @empty
                                <p class="text-muted text-center">no todos</p>
                        @endforelse
                    </ul>
                </div>
@endsection
