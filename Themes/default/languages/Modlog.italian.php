<?php
// Version: ; Modlog

global $scripturl;

$txt['modlog_date'] = 'Data';
$txt['modlog_member'] = 'Utente';
$txt['modlog_position'] = 'Posizione';
$txt['modlog_action'] = 'Azione';
$txt['modlog_ip'] = 'IP';
$txt['modlog_search_result'] = 'Risultati della ricerca';
$txt['modlog_total_entries'] = 'Voci totali';
$txt['modlog_ac_approve_topic'] = '� stato approvato il topic &quot;{topic}&quot; da parte di &quot;{member}&quot;';
$txt['modlog_ac_unapprove_topic'] = 'Unapproved topic &quot;{topic}&quot; by &quot;{member}&quot;';
$txt['modlog_ac_approve'] = '� stato approvato il post &quot;{subject}&quot; in &quot;{topic}&quot; da &quot;{member}&quot;';
$txt['modlog_ac_unapprove'] = 'Unapproved message &quot;{subject}&quot; in &quot;{topic}&quot; by &quot;{member}&quot;';
$txt['modlog_ac_lock'] = 'Chiuso il topic &quot;{topic}&quot;';
$txt['modlog_ac_warning'] = '{member} richiamato per &quot;{message}&quot;';
$txt['modlog_ac_unlock'] = 'Riaperto il topic &quot;{topic}&quot;';
$txt['modlog_ac_sticky'] = 'Impostato come importante il topic &quot;{topic}&quot;';
$txt['modlog_ac_unsticky'] = 'Il topic &quot;{topic}&quot; non &egrave; pi&ugrave; importante';
$txt['modlog_ac_delete'] = 'Eliminato &quot;{subject}&quot; di &quot;{member}&quot; da &quot;{topic}&quot;';
$txt['modlog_ac_delete_member'] = 'Eliminato l\'utente &quot;{name}&quot;';
$txt['modlog_ac_remove'] = 'Eliminato il topic &quot;{topic}&quot; in &quot;{board}&quot;';
$txt['modlog_ac_modify'] = 'Modificato il post &quot;{message}&quot; da &quot;{member}&quot;';
$txt['modlog_ac_merge'] = 'Uniti i topic in &quot;{topic}&quot;';
$txt['modlog_ac_split'] = '� stato diviso il topic &quot;{topic}&quot;, dando cos� origine a &quot;{new_topic}&quot;';
$txt['modlog_ac_move'] = '� stato spostato il topic &quot;{topic}&quot; da &quot;{board_from}&quot; a &quot;{board_to}&quot;';
$txt['modlog_ac_profile'] = 'Modificato il profilo di &quot;{member}&quot;';
$txt['modlog_ac_pruned'] = 'Sono stati rimossi alcuni post pi� vecchi di {days} giorno/i';
$txt['modlog_ac_news'] = 'Sono state modificate le news';
$txt['modlog_enter_comment'] = 'Inserisci un commento di moderazione';
$txt['modlog_moderation_log'] = 'Registro moderazione';
$txt['modlog_moderation_log_desc'] = 'Di seguito la lista di tutte le azioni effettuate dai moderatori del forum.<br /><strong>Attenzione:</strong> le voci presenti non possono essere rimosse dal registro se sono state create da meno di 24 ore.';
$txt['modlog_no_entries_found'] = 'Al momento non � presente alcun elemento nel registro delle azioni dei moderatori.';
$txt['modlog_remove'] = 'Cancella';
$txt['modlog_removeall'] = 'Cancella tutto';
$txt['modlog_remove_selected_confirm'] = 'Are you sure you want to delete the selected log entries?';
$txt['modlog_remove_all_confirm'] = 'Are you sure you want to completely clear the log?';
$txt['modlog_go'] = 'Vai';
$txt['modlog_add'] = 'Vai';
$txt['modlog_search'] = 'Ricerca rapida';
$txt['modlog_by'] = 'Da';
$txt['modlog_id'] = '<em>Cancellato - ID:%1$d</em>';

$txt['modlog_ac_add_warn_template'] = 'Da';
$txt['modlog_ac_modify_warn_template'] = '� stato modificato il modello di richiamo: &quot;{template}&quot;';
$txt['modlog_ac_delete_warn_template'] = '� stato eliminato il modello di richiamo: &quot;{template}&quot;';

$txt['modlog_ac_ban'] = 'Sono stati aggiunti i seguenti filtri di esclusioni';
$txt['modlog_ac_ban_trigger_member'] = '<em>Utente:</em> {member}';
$txt['modlog_ac_ban_trigger_email'] = '<em>E-mail:</em> {email}';
$txt['modlog_ac_ban_trigger_ip_range'] = '<em>IP:</em> {ip_range}';
$txt['modlog_ac_ban_trigger_hostname'] = '<em>Hostname:</em> {hostname}';

$txt['modlog_admin_log'] = 'Registro di Amministrazione';
$txt['modlog_admin_log_desc'] = 'Di seguito la lista di tutte le azioni effettuate dagli amministratori del forum.<br /><strong>Attenzione:</strong> le voci presenti non possono essere rimosse dal registro se create da meno di 24 ore.';
$txt['modlog_admin_log_no_entries_found'] = 'Al momento non sono presenti elementi nel registro delle azioni degli amministratori.';

// Admin type strings.
$txt['modlog_ac_upgrade'] = '� stato aggiornato il forum alla versione {version}';
$txt['modlog_ac_install'] = '� stata installata la versione {version}';
$txt['modlog_ac_add_board'] = '� stata aggiunta una nuova sezione: &quot;{board}&quot;';
$txt['modlog_ac_edit_board'] = '� stata modificata la sezione &quot;{board}&quot;';
$txt['modlog_ac_delete_board'] = '� stata eliminata la sezione &quot;{boardname}&quot;';
$txt['modlog_ac_add_cat'] = '� stata aggiunta una nuova categoria, &quot;{catname}&quot;';
$txt['modlog_ac_edit_cat'] = '� stata modificata la categoria &quot;{catname}&quot;';
$txt['modlog_ac_delete_cat'] = '� stata eliminata la categoria &quot;{catname}&quot;';

$txt['modlog_ac_delete_group'] = '� stato eliminato il gruppo &quot;{group}&quot;';
$txt['modlog_ac_add_group'] = '� stato aggiunto il gruppo &quot;{group}&quot;';
$txt['modlog_ac_edited_group'] = '� stato modificato il gruppo &quot;{group}&quot;';
$txt['modlog_ac_added_to_group'] = '� stato aggiunto l\'utente &quot;{member}&quot; al gruppo &quot;{group}&quot;';
$txt['modlog_ac_removed_from_group'] = '� stato eliminato l\'utente &quot;{member}&quot; dal gruppo &quot;{group}&quot;';
$txt['modlog_ac_removed_all_groups'] = '� stato eliminato l\'utente &quot;{member}&quot; da tutti i gruppi';

$txt['modlog_ac_remind_member'] = '� stato inviato un promemoria all\'utente &quot;{member}&quot; per l\'attivazione del proprio account';
$txt['modlog_ac_approve_member'] = '� stato approvato/attivato l\'account di &quot;{member}&quot;';
$txt['modlog_ac_newsletter'] = 'Newsletter inviata';

$txt['modlog_ac_install_package'] = 'Installato il pacchetto: &quot;{package}&quot;, versione {version}';
$txt['modlog_ac_upgrade_package'] = 'Aggiornato il pacchetto: &quot;{package}&quot; alla versione {version}';
$txt['modlog_ac_uninstall_package'] = 'Disinstallato il pacchetto: &quot;{package}&quot;, versione {version}';

// Restore topic.
$txt['modlog_ac_restore_topic'] = '� stato ripristinato il topic &quot;{topic}&quot; da &quot;{board}&quot; a &quot;{board_to}&quot;';
$txt['modlog_ac_restore_posts'] = 'Ripristinati dei post da &quot;{subject}&quot; nel topic &quot;{topic}&quot; nella sezione &quot;{board}&quot;';

$txt['modlog_parameter_guest'] = '<em>Visitatore</em>';

$txt['modlog_ac_approve_attach'] = 'Approved &quot;{filename}&quot; in &quot;{message}&quot;';
$txt['modlog_ac_remove_attach'] = 'Removed unapproved &quot;{filename}&quot; in &quot;{message}&quot;';

?>