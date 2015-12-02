@inject('category','App\ContentCategory')
<input type="hidden" name="_token" value="{{ csrf_token() }}">
                                    <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12">Content Type</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <select name="content_category_id" class="form-control">
                                                @foreach($category::all() as $cat)
                                                    <option value="{{ $cat->content_category_id }}">{{ $cat->category_name }}</option>
                                                @endforeach
                                                </select>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="title">Title <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input type="text" id="title" name="title" required="required" class="form-control col-md-7 col-xs-12">
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label class="control-label col-md-3 col-sm-3 col-xs-12" for="first-name">Description <span class="required">*</span>
                                            </label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <textarea type="text" id="description" name="description" class="form-control col-md-7 col-xs-12"></textarea>
                                            </div>
                                        </div>
                                        <div class="form-group">
                                            <label for="middle-name" class="control-label col-md-3 col-sm-3 col-xs-12">File</label>
                                            <div class="col-md-6 col-sm-6 col-xs-12">
                                                <input id="file" class="form-control col-md-7 col-xs-12" type="file" name="filename">
                                            </div>
                                        </div>
                                        <div class="ln_solid"></div>
                                        <div class="form-group">
                                            <div class="col-md-6 col-sm-6 col-xs-12 col-md-offset-3">
                                                <button type="submit" class="btn btn-primary">Cancel</button>
                                                <button type="submit" class="btn btn-success">Submit</button>
                                            </div>
                                        </div>