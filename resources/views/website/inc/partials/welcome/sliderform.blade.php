<div class="slider-form">
    <div class="sidebar-form-wrapper">
        <div class="sidebar-form">
            <form action="{{ route('web.search') }}" class="form2">
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
                        <select class="select2 select car-models" style="width: 100%" name="id_car_model">
                            {{-- JS will populate options here --}}
                            <option value="0" disabled selected hidden>Select a model</option>
                        </select>
                    </div>
                </div>
                <div class="select1_wrapper"><label>Location</label>
                    <div class="select1_inner">
                        <select class="select2 select" style="width: 100%" name="city">
                            <option value="Colombo">Colombo</option>
                            <option value="Galle">Galle</option>
                            <option value="Anuradhapura">Anuradhapura</option>
                        </select>
                    </div>
                </div>

                <div class="select1_wrapper" style="width: 45%; float:left;"><label>FROM RS.</label>
                    <div class="select1_inner">
                        <select class="select2 select" style="width: 100%" name="from">
                            <option value="100000">100000</option>
                            <option value="200000">200000</option>
                            <option value="300000">300000</option>
                        </select>
                    </div>
                </div>
                <div class="select1_wrapper" style="width: 45%; float:right;"><label>TO RS.</label>
                    <div class="select1_inner">
                        <select class="select2 select" style="width: 100%" name="to">
                            <option value="1500000">1500000</option>
                            <option value="2000000">2000000</option>
                            <option value="4500000">4500000</option>
                        </select>
                    </div>
                </div>
                <button type="submit" class="btn-default btn-form2-submit">SUBMIT FILTERS</button>
                <div class="reset-filters"><a href="#">RESET ALL FILTERS</a></div>
            </form>
        </div>
    </div>
</div>