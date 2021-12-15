<style>
    filterSection > * > * > input{
        border-radius: 0 !important;
    }
    filterSection > * > * > input:checked{
        background-color: black !important;
    }
    sorter > select {
        border-radius: 0 !important;
    }
</style>
<filterSection>
    <sorter>
        <select class="form-select" aria-label="Default select example">
            <option selected vale="">Sort By:</option>
            <option value="1">One</option>
            <option value="2">Two</option>
            <option value="3">Three</option>
        </select>
    </sorter>
    <size>
        Size (mm)
        <div class="form-check">
            <input name="size" class="form-check-input" type="checkbox" value="">
            <label class="form-check-label" for="flexCheckDefault">
                100x100
            </label>
        </div>
        <div class="form-check">
            <input name="size" class="form-check-input" type="checkbox" value="">
            <label class="form-check-label" for="flexCheckChecked">
                200x200
            </label>
        </div>
    </size>
    <surfaceFinish>
        Surface Finish
        <div class="form-check">
            <input name="surfaceFinish" class="form-check-input" type="checkbox" value="">
            <label class="form-check-label" for="flexCheckDefault">
                Wood
            </label>
        </div>
        <div class="form-check">
            <input name="surfaceFinish" class="form-check-input" type="checkbox" value="">
            <label class="form-check-label" for="flexCheckChecked">
                Porcelain
            </label>
        </div>
    </surfaceFinish>
</filterSection>