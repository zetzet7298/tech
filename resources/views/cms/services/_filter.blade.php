    <div id="kt_docs_repeater_advanced" style="padding: 10px;">
        <!--begin::Form group-->
        <form action="{{ route('services.index') }}" method="get">
            <div class="">
                <div data-repeater-list="kt_docs_repeater_advanced">
                    <div data-repeater-item id="kt_docs_repeater_basic">
                        <div class="row mt-3">
                            <div class="col-md-4" style="margin-left: 40px;">
                                <label class="form-label">Từ khoá:</label>
                                <input type="text" name="key" class="form-control" id="floatingInput"
                                    placeholder="Từ khoá" value="{{ $request['key'] ?? '' }}" />
                            </div>
                            <div class="col-md-4" style="margin-top: 30px;">
                                <button class="btn btn-primary" type="submit">
                                    Tìm kiếm
                                </button>
                            </div>
                        </div>
                    </div>
                </div>
            </div>
        </form>
    </div>
