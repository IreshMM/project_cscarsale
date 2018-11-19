<div class="slider-form">
    <div class="sidebar-form-wrapper">
        <div class="sidebar-form">
            <form action="javascript:;" class="form2">
                <div class="select1_wrapper"><label>SELECT A MANUFACTURER</label>
                    <div class="select1_inner">
                        <select class="select2 select car-makes" style="width: 100%">
                            {{-- JS will populate options here --}}
                            <option value="" disabled selected hidden>Select a make</option>
                        </select>
                    </div>
                </div>
                <div class="select1_wrapper"><label>SELECT A MODEL</label>
                    <div class="select1_inner">
                        <select class="select2 select car-models" style="width: 100%">
                            {{-- JS will populate options here --}}
                            <option value="0" disabled selected hidden>Select a model</option>
                        </select>
                    </div>
                </div>
                <div class="select1_wrapper"><label>SELECT A TYPE</label>
                    <div class="select1_inner"><select class="select2 select" style="width: 100%">
              <option value="1">Any Type</option>
              <option value="2">Type 1</option>
              <option value="3">Type 2</option>
              <option value="4">Type 3</option>
              <option value="5">Type 4</option>
              <option value="6">Type 5</option>
              <option value="7">Type 6</option>
            </select></div>
                </div>


                <div class="slider-range-wrapper">
                    <div class="txt">PRICE RANGE</div>
                    <div class="slider-range"></div>
                    <div class="clearfix"><input type="text" class="amount" readonly="">
                        <input type="text" class="amount2" readonly=""></div>
                </div>
                <button type="submit" class="btn-default btn-form2-submit">SUBMIT FILTERS</button>
                <div class="reset-filters"><a href="#">RESET ALL FILTERS</a></div>
            </form>
        </div>
    </div>
</div>