<div id="registerUser" class="tab-pane fade">
    <form class="form-horizontal" role="form" name="rejestracja" action="?task=admin&action=registerUser" method="post">
        <fieldset>
            <legend>Rejestracja nowego użytkownka</legend>
            <div class="form-group">
                <label for="inputEmail" class="col-lg-2 control-label">Email</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="inputEmail" name="email" placeholder="Email">
                </div>
            </div>

            <div class="form-group">
                <label for="inputPassword" class="col-lg-2 control-label">Hasło</label>
                <div class="col-lg-4">
                    <input type="password" class="form-control" id="inputPassword" name="haslo" placeholder="Hasło">
                </div>
            </div>

            <div class="form-group">
                <label for="inputName" class="col-lg-2 control-label">Imię</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="inputName" name="imie" placeholder="Imię">
                </div>
            </div>

            <div class="form-group">
                <label for="inputSurname" class="col-lg-2 control-label">Nazwisko</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="inputSurname" name="nazwisko" placeholder="Nazwisko">
                </div>
            </div>

            <div class="form-group">
                <label for="inputRole" class="col-lg-2 control-label">Stanowisko</label>
                <div class="col-lg-4">
                    <input type="text" class="form-control" id="inputRole" name="stanowisko" placeholder="Stanowisko">
                </div>
            </div>

            <div class="form-group">
                <label for="is_admin" class="col-lg-2 control-label">Uprawnienia</label>
                <div class="col-lg-4">
                    <select class="form-control" id="is_admin" name="is_admin">
                        <option value="0">Uczeń</option>
                        <option value="1">Nauczyciel</option>
                    </select>
                </div>
            </div>

            <div class="form-group">
                <div class="col-lg-4 col-lg-offset-2">
                    <button type="submit" class="btn btn-primary">Zarejestruj</button>
                    <button type="reset" class="btn btn-default">Anuluj</button>
                </div>
            </div>
        </fieldset>
    </form>
</div>