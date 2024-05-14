<?php
if (isset($_GET['model_tech'])):
    ?>
    <div class="container card_model">
        <div class="header">
            <img src="assets/img/club-logo.png">
            <span>نموذج طلب خدمة إلكترونية</span>
        </div>
        <div class="content">
            <form id="serviceForm">
                <div class="text">
                    <input type="text" id="employeeName" name="employeeName" placeholder="إسم الموظف" maxlength="50"
                        required>
                    <input type="text" id="jobTitle" name="jobTitle" placeholder="المسمي الوظيفي" maxlength="50" required>
                </div>

                <div class="drobdown">
                    <select required id="option" name="serviceOption">
                        <option selected disabled>إختر خدمة</option>
                        <option value="service_1">خدمة صيانة</option>
                        <option value="service_2">عطل تقني</option>
                        <option value="service_3">إستشارة تقنية</option>
                    </select>
                </div>
                <div class="send">
                    <input id="submit" onclick="validateForm()" type="button" value="إرسال">
                </div>
            </form>
        </div>
    </div>
    <?php
endif;
?>