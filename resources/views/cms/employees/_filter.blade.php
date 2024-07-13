    <div id="kt_docs_repeater_advanced">
        <!--begin::Form group-->
        <form action="{{route("employees.index")}}" method="get">
            <div class="form-group">
                <div data-repeater-list="kt_docs_repeater_advanced">
                    <div data-repeater-item id="kt_docs_repeater_basic">
                        <div class="form-group row">
                            <div class="col-md-4">
                                <label class="form-label">Từ khoá:</label>
                                <input type="text" name="key" class="form-control" id="floatingInput" placeholder="Từ khoá" value="{{$request['key'] ?? ""}}"/>
                            </div>
                            <div class="col-md-4">
                                <label class="form-label">Chuyên ngành:</label>
                                <select class="form-select" data-kt-repeater="select2" data-placeholder="Chọn danh mục" name="specialty_id">
                                    <option value="" data-select2-id="select2-data-21-6bmk">Tất cả</option>
                                    @foreach($specialties as $c)
                                        <option value="{{$c->id}}" @if(isset($request['specialty_id'])) @if($c['id'] == $request['specialty_id']) selected @endif  @endif>{{$c['name']}}</option>
                                    @endforeach
                                </select>
                            </div>
                            <div class="col-4" style="margin-top: 26px;">
                                <div class="outer">
                                    <button href="javascript:;" class="inner btn btn-primary" type="submit">
                                        Tìm kiếm
                                    </button>
                                    {{-- <a href="{{route("employees.index")}}" class="inner btn btn-info">
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
