    <div id="kt_docs_repeater_advanced">
        <!--begin::Form group-->
        <form action="{{route("posts.index")}}" method="get">
            <div class="form-group">
                <div data-repeater-list="kt_docs_repeater_advanced">
                    <div data-repeater-item id="kt_docs_repeater_basic">
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label class="form-label">Từ khoá:</label>
                                <input type="text" name="key" class="form-control" id="floatingInput" placeholder="Từ khoá" value="{{$request['key'] ?? ""}}"/>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Danh mục:</label>
                                <select class="form-select" data-kt-repeater="select2" data-placeholder="Chọn danh mục" name="category_id">
                                    <option value="" data-select2-id="select2-data-21-6bmk">Tất cả</option>
                                    @foreach($categories as $c)
                                        <option value="{{$c->id}}" @if(isset($request['category_id'])) @if($c['id'] == $request['category_id']) selected @endif  @endif>{{$c['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4" style="margin-top: 26px;">
                                <div class="outer">
                                    <button href="javascript:;" class="inner btn btn-primary" type="submit">
                                        Tìm kiếm
                                    </button>
                                    {{-- <a href="{{route("posts.index")}}" class="inner btn btn-info">
                                        Reset
                                    </a> --}}
                                </div>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
