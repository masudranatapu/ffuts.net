
<div class="shop_filter">
    <form action="#" method="post">
        <div class="filter_category mb-3">
            <h5>offices and activities trade</h5>
            <div class="form-check">
                <input class="form-check-input" name="category" type="checkbox" value=""
                    id="category_1">
                <label class="form-check-label" for="category_1">
                    search titles only
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="category" type="checkbox" value=""
                    id="category_2">
                <label class="form-check-label" for="category_2">
                    it has pictures
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="category" type="checkbox" value=""
                    id="category_3">
                <label class="form-check-label" for="category_3">
                    posted today
                </label>
            </div>
        </div>
        <div class="filter_wrap mb-3">
            <label for="" class="form-label">Price</label>
            <div class="row g-2">
                <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" name="min_price" id="min_price" placeholder="Min"
                            class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" name="min_price" id="min_price" placeholder="Max"
                            class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="filter_wrap mb-3">
            <label for="" class="form-label">FT</label>
            <div class="row g-2">
                <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" name="min_price" id="min_price" placeholder="Min"
                            class="form-control">
                    </div>
                </div>
                <div class="col-6">
                    <div class="input-group">
                        <span class="input-group-text">$</span>
                        <input type="number" name="min_price" id="min_price" placeholder="Max"
                            class="form-control">
                    </div>
                </div>
            </div>
        </div>
        <div class="filter_wrap availabililty_select mb-3">
            <label for="" class="form-label">Availability</label>
            <select name="availability" id="availability" class="form-control">
                <option value="all dates">all dates</option>
                <option value="30 days">in 30 days</option>
                <option value="over 30 days">over 30 days</option>
            </select>
        </div>
        <div class="filter_wrap mb-3">
            <label for="" class="form-label">duration of the rental</label>
            <div class="form-check">
                <input class="form-check-input" name="duration" type="checkbox" value=""
                    id="duration_1">
                <label class="form-check-label" for="duration_1">
                    search titles only
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="duration" type="checkbox" value=""
                    id="duration_2">
                <label class="form-check-label" for="duration_2">
                    it has pictures
                </label>
            </div>
            <div class="form-check">
                <input class="form-check-input" name="duration" type="checkbox" value=""
                    id="duration_3">
                <label class="form-check-label" for="duration_3">
                    posted today
                </label>
            </div>
        </div>
        <div class="filter_wrap mb-3">
            <button type="button" class="reset">Reset</button>
            <button type="submit" class="float-end">update search</button>
        </div>
    </form>
</div>
