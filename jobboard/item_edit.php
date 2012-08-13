<h2><?php _e('Job details', 'jobboard'); ?></h2>
<div class="jobs-attributes box">
    <div class="row _200 auto">
        <?php
            if( Session::newInstance()->_getForm('pj_positionType') != "" ) {
                $detail['e_position_type'] = Session::newInstance()->_getForm('pj_positionType');
            }
        ?>
        <label for="positionType"><?php _e('Position type', 'jobboard'); ?></label>
        <select name="positionType" id="positionType">
            <option value="UNDEF" <?php if( @$detail['e_position_type'] == 'UNDEF' ) { echo 'selected'; }; ?>><?php _e('Undefined', 'jobboard'); ?></option>
            <option value="PART" <?php if( @$detail['e_position_type'] == 'PART' ) { echo 'selected'; }; ?>><?php _e('Part time', 'jobboard'); ?></option>
            <option value="FULL" <?php if( @$detail['e_position_type'] == 'FULL' ) { echo 'selected'; }; ?>><?php _e('Full-time', 'jobboard'); ?></option>
        </select>
    </div>
    <div class="row">
        <?php
            if( Session::newInstance()->_getForm('pj_salaryText') != "" ) {
                $detail['e_relation'] = Session::newInstance()->_getForm('pj_salaryText');
            }
        ?>
        <label for="look"><?php _e('Salary', 'jobboard'); ?></label>
        <input type="text" name="salaryText" value="<?php echo @$detail['s_salary_text']; ?>" />
    </div>

<?php
    $locales = osc_get_locales();
    if(count($locales)==1) {
        $locale = $locales[0];
?>
        <div class="row">
            <?php
                if( Session::newInstance()->_getForm('pj_data') != "" ) {
                    $data = Session::newInstance()->_getForm('pj_data');
                    $detail['locale'][$locale['pk_c_code']]['s_desired_exp'] = $data[$locale['pk_c_code']]['desired_exp'];
                }
            ?>
            <label for="desired_exp"><?php _e('Desired experience', 'jobboard'); ?></label>
            <input type="text" name="<?php echo @$locale['pk_c_code']; ?>#desired_exp" id="desired_exp" value="<?php echo @$detail['locale'][$locale['pk_c_code']]['s_desired_exp']; ?>" />
        </div>
        <div class="row">
            <?php
                if( Session::newInstance()->_getForm('pj_data') != "" ) {
                    $data = Session::newInstance()->_getForm('pj_data');
                    $detail['locale'][$locale['pk_c_code']]['s_studies'] = $data[$locale['pk_c_code']]['studies'];
                }
            ?>
            <label for="studies"><?php _e('Studies', 'jobboard'); ?></label>
            <input type="text" name="<?php echo @$locale['pk_c_code']; ?>#studies" id="studies" value="<?php echo  @$detail['locale'][$locale['pk_c_code']]['s_studies']; ?>" />
        </div>
        <div class="row">
            <?php
                if( Session::newInstance()->_getForm('pj_data') != "" ) {
                    $data = Session::newInstance()->_getForm('pj_data');
                    $detail['locale'][$locale['pk_c_code']]['s_minimum_requirements'] = $data[$locale['pk_c_code']]['min_reqs'];
                }
            ?>
            <label for="min_reqs"><?php _e('Minimum requirements', 'jobboard'); ?></label>
            <textarea name="<?php echo @$locale['pk_c_code']; ?>#min_reqs" id="min_reqs" ><?php echo @$detail['locale'][$locale['pk_c_code']]['s_minimum_requirements']; ?></textarea>
        </div>
        <div class="row">
            <?php
                if( Session::newInstance()->_getForm('pj_data') != "" ) {
                    $data = Session::newInstance()->_getForm('pj_data');
                    $detail['locale'][$locale['pk_c_code']]['s_desired_requirements'] = $data[$locale['pk_c_code']]['desired_reqs'];
                }
            ?>
            <label for="desired_reqs"><?php _e('Desired requirements', 'jobboard'); ?></label>
            <textarea name="<?php echo @$locale['pk_c_code']; ?>#desired_reqs" id="desired_reqs" ><?php echo @$detail['locale'][$locale['pk_c_code']]['s_desired_requirements']; ?></textarea>
        </div>
        <div class="row">
            <?php
                if( Session::newInstance()->_getForm('pj_data') != "" ) {
                    $data = Session::newInstance()->_getForm('pj_data');
                    $detail['locale'][$locale['pk_c_code']]['s_contract'] = $data[$locale['pk_c_code']]['contract'];
                }
            ?>
            <label for="contract"><?php _e('Contract', 'jobboard'); ?></label>
            <input type="text" name="<?php echo @$locale['pk_c_code']; ?>#contract" id="contract"  value="<?php echo @$detail['locale'][$locale['pk_c_code']]['s_contract']; ?>" />
        </div>
    <?php } else { ?>
        <div class="tabber">
        <?php foreach($locales as $locale) {?>
            <div class="tabbertab">
                <h2><?php echo $locale['s_name']; ?></h2>
                <div class="row">
                    <?php
                        if( Session::newInstance()->_getForm('pj_data') != "" ) {
                            $data = Session::newInstance()->_getForm('pj_data');
                            $detail['locale'][$locale['pk_c_code']]['s_desired_exp'] = $data[$locale['pk_c_code']]['desired_exp'];
                        }
                    ?>
                    <label for="desired_exp"><?php _e('Desired experience', 'jobboard'); ?></label>
                    <input type="text" name="<?php echo @$locale['pk_c_code']; ?>#desired_exp" id="desired_exp" value="<?php echo @$detail['locale'][$locale['pk_c_code']]['s_desired_exp']; ?>" />
                </div>
                <div class="row">
                    <?php
                        if( Session::newInstance()->_getForm('pj_data') != "" ) {
                            $data = Session::newInstance()->_getForm('pj_data');
                            $detail['locale'][$locale['pk_c_code']]['s_studies'] = $data[$locale['pk_c_code']]['studies'];
                        }
                    ?>
                    <label for="studies"><?php _e('Studies', 'jobboard'); ?></label>
                    <input type="text" name="<?php echo @$locale['pk_c_code']; ?>#studies" id="studies" value="<?php echo @$detail['locale'][$locale['pk_c_code']]['s_studies']; ?>" />
                </div>
                <div class="row">
                    <?php
                        if( Session::newInstance()->_getForm('pj_data') != "" ) {
                            $data = Session::newInstance()->_getForm('pj_data');
                            $detail['locale'][$locale['pk_c_code']]['s_minimum_requirements'] = $data[$locale['pk_c_code']]['min_reqs'];
                        }
                    ?>
                    <label for="min_reqs"><?php _e('Minimum requirements', 'jobboard'); ?></label>
                    <textarea name="<?php echo @$locale['pk_c_code']; ?>#min_reqs" id="min_reqs" ><?php echo @$detail['locale'][$locale['pk_c_code']]['s_minimum_requirements']; ?></textarea>
                </div>
                <div class="row">
                    <?php
                        if( Session::newInstance()->_getForm('pj_data') != "" ) {
                            $data = Session::newInstance()->_getForm('pj_data');
                            $detail['locale'][$locale['pk_c_code']]['s_desired_requirements'] = $data[$locale['pk_c_code']]['desired_reqs'];
                        }
                    ?>
                    <label for="desired_reqs"><?php _e('Desired requirements', 'jobboard'); ?></label>
                    <textarea name="<?php echo @$locale['pk_c_code']; ?>#desired_reqs" id="desired_reqs" ><?php echo @$detail['locale'][$locale['pk_c_code']]['s_desired_requirements']; ?></textarea>
                </div>
                <div class="row">
                    <?php
                        if( Session::newInstance()->_getForm('pj_data') != "" ) {
                            $data = Session::newInstance()->_getForm('pj_data');
                            $detail['locale'][$locale['pk_c_code']]['s_contract'] = $data[$locale['pk_c_code']]['contract'];
                        }
                    ?>
                    <label for="contract"><?php _e('Contract', 'jobboard'); ?></label>
                    <input type="text" name="<?php echo @$locale['pk_c_code']; ?>#contract" id="contract" value="<?php echo @$detail['locale'][$locale['pk_c_code']]['s_contract']; ?>" />
                </div>
                <div style="clear:both;"></div>
            </div>
        <?php } ?>
        </div>
<?php } ?>
<script type="text/javascript">
    tabberAutomatic();
</script>