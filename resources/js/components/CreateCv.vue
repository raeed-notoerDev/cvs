<template>
    <div class="container-fluid">
        <form class="form-group">
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        {{ $t('specialization_main',$i18n.locale) }}

                    </div>
                </div>
                <div class="card-body">
                    <select class="form-control">
                        <option value=""> please Check</option>
                    </select>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        {{ $t('general_info',$i18n.locale) }}
                    </div>

                </div>
                <div class="card-body">
                    <div class="row">
                        {{ $t('job_title',$i18n.locale) }}
                    </div>
                    <div class="row">
                        <input type="text" class="form-control" :placeholder="$t('job_title',$i18n.locale) ">
                    </div>
                    <hr>
                    <div class="row">
                        <div class="col">
                            <div class="row">
                                {{ $t('name',$i18n.locale) }}
                            </div>
                            <div class="row">
                                <input type="text" class="form-control" :placeholder="$t('name',$i18n.locale) ">
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col ">
                            <div class="row">
                                {{ $t('nationality',$i18n.locale) }}
                            </div>
                            <div class="row">
                                <input type="text" class="form-control" :placeholder="$t('nationality',$i18n.locale) ">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col ">
                            <div class="row">
                                {{ $t('phone_number',$i18n.locale) }}
                            </div>
                            <div class="row">
                                <input type="number" class="form-control"
                                       :placeholder="$t('phone_number',$i18n.locale) ">
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col ">
                            <div class="row">
                                {{ $t('email',$i18n.locale) }}
                            </div>
                            <div class="row">
                                <input type="email" class="form-control" :placeholder="$t('email',$i18n.locale) ">
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col ">
                            <div class="row">
                                {{ $t('social_status',$i18n.locale) }}
                            </div>
                            <div class="row">
                                <input type="text" class="form-control"
                                       :placeholder="$t('social_status',$i18n.locale) ">
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col ">
                            <div class="row">
                                {{ $t('birthday',$i18n.locale) }}
                            </div>
                            <div class="row">
                                <div class="col">
                                    <select class="form-control inline required" name="birthday">
                                        <option value=""> {{$t('day',$i18n.locale)}}</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                        <option value="13">13</option>
                                        <option value="14">14</option>
                                        <option value="15">15</option>
                                        <option value="16">16</option>
                                        <option value="17">17</option>
                                        <option value="18">18</option>
                                        <option value="19">19</option>
                                        <option value="20">20</option>
                                        <option value="21">21</option>
                                        <option value="22">22</option>
                                        <option value="23">23</option>
                                        <option value="24">24</option>
                                        <option value="25">25</option>
                                        <option value="26">26</option>
                                        <option value="27">27</option>
                                        <option value="28">28</option>
                                        <option value="29">29</option>
                                        <option value="30">30</option>
                                        <option value="31">31</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control inline required" name="birthmonth">
                                        <option value=""> {{$t('month',$i18n.locale)}}</option>
                                        <option value="1">1</option>
                                        <option value="2">2</option>
                                        <option value="3">3</option>
                                        <option value="4">4</option>
                                        <option value="5">5</option>
                                        <option value="6">6</option>
                                        <option value="7">7</option>
                                        <option value="8">8</option>
                                        <option value="9">9</option>
                                        <option value="10">10</option>
                                        <option value="11">11</option>
                                        <option value="12">12</option>
                                    </select>
                                </div>
                                <div class="col">
                                    <select class="form-control inline required" name="birthyear">
                                        <option value=""> {{$t('year',$i18n.locale)}}</option>
                                        <option value="2007">2007</option>
                                        <option value="2006">2006</option>
                                        <option value="2005">2005</option>
                                        <option value="2004">2004</option>
                                        <option value="2003">2003</option>
                                        <option value="2002">2002</option>
                                        <option value="2001">2001</option>
                                        <option value="2000">2000</option>
                                        <option value="1999">1999</option>
                                        <option value="1998">1998</option>
                                        <option value="1997">1997</option>
                                        <option value="1996">1996</option>
                                        <option value="1995">1995</option>
                                        <option value="1994">1994</option>
                                        <option value="1993">1993</option>
                                        <option value="1992">1992</option>
                                        <option value="1991">1991</option>
                                        <option value="1990">1990</option>
                                        <option value="1989">1989</option>
                                        <option value="1988">1988</option>
                                        <option value="1987">1987</option>
                                        <option value="1986">1986</option>
                                        <option value="1985">1985</option>
                                        <option value="1984">1984</option>
                                        <option value="1983">1983</option>
                                        <option value="1982">1982</option>
                                        <option value="1981">1981</option>
                                        <option value="1980">1980</option>
                                        <option value="1979">1979</option>
                                        <option value="1978">1978</option>
                                        <option value="1977">1977</option>
                                        <option value="1976">1976</option>
                                        <option value="1975">1975</option>
                                        <option value="1974">1974</option>
                                        <option value="1973">1973</option>
                                        <option value="1972">1972</option>
                                        <option value="1971">1971</option>
                                        <option value="1970">1970</option>
                                        <option value="1969">1969</option>
                                        <option value="1968">1968</option>
                                        <option value="1967">1967</option>
                                        <option value="1966">1966</option>
                                        <option value="1965">1965</option>
                                        <option value="1964">1964</option>
                                        <option value="1963">1963</option>
                                        <option value="1962">1962</option>
                                        <option value="1961">1961</option>
                                        <option value="1960">1960</option>
                                        <option value="1959">1959</option>
                                        <option value="1958">1958</option>
                                        <option value="1957">1957</option>
                                        <option value="1956">1956</option>
                                        <option value="1955">1955</option>
                                        <option value="1954">1954</option>
                                        <option value="1953">1953</option>
                                        <option value="1952">1952</option>
                                        <option value="1951">1951</option>
                                        <option value="1950">1950</option>
                                    </select>
                                </div>
                            </div>
                        </div>
                    </div>
                    <br>
                    <div class="row">
                        <div class="col ">
                            <div class="row">
                                {{ $t('address',$i18n.locale) }}
                            </div>
                            <div class="row">
                                <input type="text" class="form-control"
                                       :placeholder="$t('address',$i18n.locale) ">
                            </div>
                        </div>
                        <div class="col-md-1"></div>
                        <div class="col">
                            <div class="row">
                                {{ $t('web_site',$i18n.locale) }}
                            </div>
                            <div class="row">
                                <input type="text" class="form-control"
                                       :placeholder="$t('web_site',$i18n.locale) ">
                            </div>
                        </div>
                    </div>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        {{ $t('scientific_certificates',$i18n.locale) }}
                        <div class="col">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#exampleModalCenter">
                                {{ $t('add',$i18n.locale) }}
                            </button>

                            <!-- Modal -->
                            <form class="form-group">
                                <div class="modal fade" id="exampleModalCenter" tabindex="-1" role="dialog"
                                     aria-labelledby="exampleModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('specialization_scientific',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('graduation_year',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('university',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('country',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    {{ $t('note',$i18n.locale) }}
                                                    <textarea class="form-control" style="margin: 5px"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    {{ $t('close',$i18n.locale) }}
                                                </button>
                                                <button type="button" class="btn btn-primary">
                                                    {{ $t('save',$i18n.locale) }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <th>
                            {{ $t('specialization_scientific',$i18n.locale) }}
                        </th>
                        <th>
                            {{ $t('graduation_year',$i18n.locale) }}
                        </th>
                        <th>
                            {{ $t('university',$i18n.locale) }}
                        </th>
                        <th>
                            {{ $t('country',$i18n.locale) }}
                        </th>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        {{ $t('experience',$i18n.locale) }}
                        <div class="col">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#ModalCenter">
                                {{ $t('add',$i18n.locale) }}
                            </button>

                            <!-- Modal -->
                            <form class="form-group">
                                <div class="modal fade" id="ModalCenter" tabindex="-1" role="dialog"
                                     aria-labelledby="ModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('job_description',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('company_name',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('starting_date',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('expiry_date',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('country',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    {{ $t('note',$i18n.locale) }}
                                                    <textarea class="form-control" style="margin: 5px"></textarea>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    {{ $t('close',$i18n.locale) }}
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    {{ $t('save',$i18n.locale) }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <th>
                            {{ $t('job_description',$i18n.locale) }}
                        </th>
                        <th>
                            {{ $t('company_name',$i18n.locale) }}
                        </th>
                        <th>
                            {{ $t('starting_date',$i18n.locale) }}
                        </th>
                        <th>
                            {{ $t('expiry_date',$i18n.locale) }}
                        </th>
                        <th>
                            {{ $t('country',$i18n.locale) }}
                        </th>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        {{ $t('languages',$i18n.locale) }}
                        <div class="col">
                            <!-- Button trigger modal -->
                            <button type="button" class="btn btn-success" data-toggle="modal"
                                    data-target="#LangModalCenter">
                                {{ $t('add',$i18n.locale) }}
                            </button>

                            <!-- Modal -->
                            <form class="form-group">
                                <div class="modal fade" id="LangModalCenter" tabindex="-1" role="dialog"
                                     aria-labelledby="LangModalCenterTitle" aria-hidden="true">
                                    <div class="modal-dialog modal-dialog-centered" role="document">
                                        <div class="modal-content">
                                            <div class="modal-header">

                                                <button type="button" class="close" data-dismiss="modal"
                                                        aria-label="Close">
                                                    <span aria-hidden="true">&times;</span>
                                                </button>
                                            </div>
                                            <div class="modal-body">
                                                <div class="row">
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('language',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                                <div class="row">
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('level_read',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('level_write',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                    <div class="col" style="margin: 5px">
                                                        <div class="row">
                                                            {{ $t('level_conversation',$i18n.locale) }}
                                                        </div>
                                                        <div class="row">
                                                            <input class="form-control" type="text">
                                                        </div>
                                                    </div>
                                                </div>
                                            </div>
                                            <div class="modal-footer">
                                                <button type="button" class="btn btn-secondary" data-dismiss="modal">
                                                    {{ $t('close',$i18n.locale) }}
                                                </button>
                                                <button type="submit" class="btn btn-primary">
                                                    {{ $t('save',$i18n.locale) }}
                                                </button>
                                            </div>
                                        </div>
                                    </div>
                                </div>
                            </form>
                        </div>
                    </div>
                </div>
                <div class="card-body">
                    <table class="table">
                        <thead>
                        <th>
                            {{ $t('language',$i18n.locale) }}
                        </th>
                        <th>
                            {{ $t('level_read',$i18n.locale) }}
                        </th>
                        <th>
                            {{ $t('level_write',$i18n.locale) }}
                        </th>
                        <th>
                            {{ $t('level_conversation',$i18n.locale) }}
                        </th>

                        </thead>
                        <tbody>

                        </tbody>
                    </table>
                </div>
            </div>
            <div class="card">
                <div class="card-header">
                    <div class="row">
                        {{ $t('note',$i18n.locale) }}

                    </div>
                </div>
                <div class="card-body">
                    <textarea class="form-control"></textarea>

                </div>
            </div>

                <button class="btn btn-outline-primary" type="submit" style="margin-top: 10px">  {{ $t('save',$i18n.locale) }}</button>

        </form>
    </div>
</template>

<script>
    export default {
        name: "CreateCv"
    }
</script>

<style scoped>

</style>
