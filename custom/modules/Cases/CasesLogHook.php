<?php   
if (!defined('sugarEntry') || !sugarEntry) die('Not A Valid Entry Point');    

class CasesLogHook {
    function cases_log_hook($bean, $event, $arguments) {
		$log_link = 'clog_caseslog_cases';
        //If relationship is loaded
		if ($bean->load_relationship($log_link))
		{
			//Fetch related beans 
			$logBeans = $bean->$log_link->getBeans();
			
			// Ensure we don't already have any logs for this user from today
			foreach($logBeans as $logBean) {
				// If not today, we can ignore it
				if ($logBean->log_date != date('Y-m-d')) {
					continue;
				}
								
				// If it is today, only ignore if user matches current user
				if ($logBean->clog_caseslog_usersusers_ida === $bean->modified_user_id) {
					return;
				}
			}
			
			// Create new log entry
			$logBean = BeanFactory::newBean('CLOG_CasesLog');
			$logBean->log_date = date('Y-m-d');
			$logBean->clog_caseslog_casescases_ida = $bean->id;
			$logBean->clog_caseslog_usersusers_ida = $bean->modified_user_id;
			$logBean->save();
		}
	}
} 