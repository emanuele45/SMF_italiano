<?php
// Version: ; Errors

global $scripturl, $modSettings;

$txt['no_access'] = 'Non sei autorizzato ad accedere a questa sezione';
$txt['wireless_error_notyet'] = 'Al momento questa sezione non � disponibile per gli utenti connessi alla versione mobile.';

$txt['mods_only'] = 'Solo i moderatori possono usare la funzione di cancellazione diretta: rimuovi questo post utilizzando la funzionalit� di modifica.';
$txt['no_name'] = 'Non � stato compilato il campo del nome (obbligatorio).';
$txt['no_email'] = 'Non � stato compilato il campo e-mail (obbligatorio).';
$txt['topic_locked'] = 'Questo topic � chiuso, non hai permessi adeguati per aggiungere o modificare alcun post...';
$txt['no_password'] = 'Non � stato compilato il campo password (obbligatorio)';
$txt['already_a_user'] = 'Il nome utente indicato � gi� esistente.';
$txt['cant_move'] = 'Non sei autorizzato a spostare i topic...';
$txt['login_to_post'] = 'Per inserire un post � necessario effettuare l\'accesso. Se non possiedi ancora un account puoi <a href="' . $scripturl . '?action=register">registrarti</a>.';
$txt['passwords_dont_match'] = 'Le password inserite non coincidono.';
$txt['register_to_use'] = 'Spiacente, � necessario essere registrati per utilizzare questa funzione.';
$txt['password_invalid_character'] = 'Hai stato utilizzato un carattere non valido nella password.';
$txt['name_invalid_character'] = 'Hai stato utilizzato un carattere non valido nel nome.';
$txt['email_invalid_character'] = 'Hai stato utilizzato un carattere non valido nell\'e-mail.';
$txt['username_reserved'] = 'Il nome utente inserito contiene il nome riservato \'%1$s\'. Prova con un altro nome.';
$txt['numbers_one_to_nine'] = 'Questo campo accetta solo numeri da 0 a 9';
$txt['not_a_user'] = 'L\'utente di cui stai cercando di visualizzare il profilo, non � pi� registrato.';
$txt['not_a_topic'] = 'Questo topic non esiste in questa sezione.';
$txt['not_approved_topic'] = 'Questo topic non � stato ancora approvato.';
$txt['email_in_use'] = 'L\'indirizzo e-mail (%1$s) � gi� utilizzato da un altro utente. Se ritieni sia un errore, vai alla pagina di login e utilizza il promemoria della password per questo indirizzo.';
$txt['attachments_no_write'] = 'La cartella di caricamento degli allegati non ha i permessi di scrittura. Non � quindi possibile salvare allegati o avatar.';

$txt['didnt_select_vote'] = 'Non hai scelto alcuna opzione di voto.';
$txt['poll_error'] = 'Il sondaggio � inesistente, � stato chiuso o stai tentando di votare una seconda volta.';
$txt['members_only'] = 'Questa opzione � disponibile solamente per gli utenti registrati.';
$txt['locked_by_admin'] = 'Chiuso da un amministratore. Non � possibile riaprirlo.';
$txt['not_enough_posts_karma'] = 'Non hai abbastanza post per poter modificare il karma. Sono necessari almeno %1$d post.';
$txt['cant_change_own_karma'] = 'Non puoi modificare il tuo karma.';
$txt['karma_wait_time'] = 'Non puoi modificare il karma di questo utente senza prima aver atteso %1$s %2$s.';
$txt['feature_disabled'] = 'Spiacente, questa funzione non � attiva.';
$txt['feature_no_exists'] = 'Sorry, this feature doesn\'t exist.';
$txt['couldnt_connect'] = 'Impossibile collegarsi al server o trovare il file';
$txt['no_board'] = 'La sezione specificata non esiste';
$txt['no_message'] = 'The message is no longer available';
$txt['cant_split'] = 'Non hai il permesso di dividere i topic';
$txt['cant_merge'] = 'Non hai il permesso di unire i topic';
$txt['no_topic_id'] = 'Hai specificato un ID di topic non valido.';
$txt['split_first_post'] = 'Non � possibile dividere un topic al primo post.';
$txt['topic_one_post'] = 'Questo topic contiene solamente un post e non pu� essere diviso.';
$txt['no_posts_selected'] = 'nessun post selezionato';
$txt['selected_all_posts'] = 'Impossibile dividere. Hai selezionato tutti i post presenti.';
$txt['cant_find_messages'] = 'Impossibile trovare dei post';
$txt['cant_find_user_email'] = 'Impossibile trovare l\'indirizzo e-mail dell\'utente';
$txt['cant_insert_topic'] = 'Impossibile inserire un topic';
$txt['already_a_mod'] = 'Hai scelto il nome utente di un moderatore gi� esistente. Prova con un altro nome.';
$txt['session_timeout'] = 'Durante l\'inserimento la sessione � scaduta. Torna indietro e riprova.';
$txt['session_verify_fail'] = 'Sessione di verifica fallita. Prova a scollegarti, tornare indietro e tentare di nuovo.';
$txt['verify_url_fail'] = 'Impossibile verificare l\'indirizzo referrer. Torna indietro e riprova.';
$txt['token_verify_fail'] = 'Token verification failed.  Please go back and try again.';
$txt['guest_vote_disabled'] = 'Gli ospiti non possono votare in questo sondaggio.';

$txt['cannot_access_mod_center'] = 'Non sei autorizzato ad accedere al centro di moderazione.';
$txt['cannot_admin_forum'] = 'Non sei autorizzato ad amministrare questo forum.';
$txt['cannot_announce_topic'] = 'Non hai permessi adeguati per annunciare topic in questa sezione.';
$txt['cannot_approve_posts'] = 'Non hai permessi adeguati per approvare questi elementi.';
$txt['cannot_post_unapproved_attachments'] = 'Non hai permessi adeguati per inviare post con allegati non approvati.';
$txt['cannot_post_unapproved_topics'] = 'Non hai permessi adeguati per inserire topic non approvati.';
$txt['cannot_post_unapproved_replies_own'] = 'Non hai permessi adeguati per inviare post non approvati nei tuoi topic.';
$txt['cannot_post_unapproved_replies_any'] = 'Non hai permessi adeguati per inviare post non approvati nei topic altrui.';
$txt['cannot_calendar_edit_any'] = 'Non hai permessi adeguati per modificare gli eventi nel calendario.';
$txt['cannot_calendar_edit_own'] = 'Non hai permessi adeguati per modificare i propri eventi.';
$txt['cannot_calendar_post'] = 'Non hai permessi adeguati per inserire eventi nel calendario.';
$txt['cannot_calendar_view'] = 'Non hai permessi adeguati per visualizzare il calendario.';
$txt['cannot_remove_any'] = 'Non hai permessi adeguati per rimuovere alcun topic.';
$txt['cannot_remove_own'] = 'Non hai permessi adeguati per eliminare i propri topic da questa sezione.';
$txt['cannot_edit_news'] = 'Non hai permessi adeguati per modificare le news in questo forum.';
$txt['cannot_pm_read'] = 'Non hai permessi adeguati per leggere i propri messaggi privati.';
$txt['cannot_pm_send'] = 'Non hai permessi adeguati per inviare messaggi privati.';
$txt['cannot_karma_edit'] = 'Non hai permessi adeguati per modificare il karma degli altri utenti.';
$txt['cannot_lock_any'] = 'Non hai permessi adeguati per chiudere alcun topic qui.';
$txt['cannot_lock_own'] = 'Non hai permessi adeguati per chiudere i propri topic.';
$txt['cannot_make_sticky'] = 'Non hai permessi adeguati per marcare quest topic come importante.';
$txt['cannot_manage_attachments'] = 'Non hai permessi adeguati per gestire gli allegati o gli avatar.';
$txt['cannot_manage_bans'] = 'Non hai permessi adeguati per modificare l\'elenco delle esclusioni.';
$txt['cannot_manage_boards'] = 'Non hai permessi adeguati per gestire sezioni e categorie.';
$txt['cannot_manage_membergroups'] = 'Non hai permessi adeguati per modificare o assegnare i gruppi.';
$txt['cannot_manage_permissions'] = 'Non hai permessi adeguati per gestire i permessi.';
$txt['cannot_manage_smileys'] = 'Non hai permessi adeguati per gestire le smiley e le icone messaggio.';
$txt['cannot_mark_any_notify'] = 'Non hai permessi adeguati per ricevere le notifiche da questo topic.';
$txt['cannot_mark_notify'] = 'Non hai permessi adeguati per ricevere le notifiche da questa sezione.';
$txt['cannot_merge_any'] = 'Non hai permessi adeguati per unire i topic in una delle sezioni selezionate.';
$txt['cannot_moderate_forum'] = 'Non hai permessi adeguati per moderare questo forum.';
$txt['cannot_moderate_board'] = 'Non sei abilitato a moderare questa board.';
$txt['cannot_modify_any'] = 'Non hai permessi adeguati per modificare alcun post.';
$txt['cannot_modify_own'] = 'Non hai permessi adeguati per modificare i propri post.';
$txt['cannot_modify_replies'] = 'Nonostante questo post sia in risposta ad un topic aperto da te, non hai permessi adeguati per modificarlo.';
$txt['cannot_move_own'] = 'Non hai permessi adeguati per spostare i propri topic in questa sezione.';
$txt['cannot_move_any'] = 'Non hai permessi adeguati per spostare i topic in questa sezione.';
$txt['cannot_poll_add_own'] = 'Non hai permessi adeguati per aggiungere sondaggi ai propri topic in questa sezione.';
$txt['cannot_poll_add_any'] = 'Non hai permessi adeguati per aggiungere sondaggi a questo topic.';
$txt['cannot_poll_edit_own'] = 'Non hai permessi adeguati per modificare questo sondaggio, nonostante sia il tuo.';
$txt['cannot_poll_edit_any'] = 'Si � stati esclusi dal modificare i sondaggi in questa sezione.';
$txt['cannot_poll_lock_own'] = 'Non hai permessi adeguati per chiudere i tuoi sondaggi in questa sezione.';
$txt['cannot_poll_lock_any'] = 'Non hai permessi adeguati per chiudere alcun sondaggio.';
$txt['cannot_poll_post'] = 'Non hai permessi adeguati per inserire sondaggi nella sezione corrente.';
$txt['cannot_poll_remove_own'] = 'Non hai permessi adeguati per eliminare questo sondaggio dal topic aperto da te.';
$txt['cannot_poll_remove_any'] = 'Non hai permessi adeguati per rimuovere alcun sondaggio in questa sezione.';
$txt['cannot_poll_view'] = 'Non hai permessi adeguati per visualizzare i sondaggi in questa sezione.';
$txt['cannot_poll_vote'] = 'Non hai permessi adeguati per partecipare alle votazione dei sondaggi in questa sezione.';
$txt['cannot_post_attachment'] = 'Non hai permessi adeguati per inserire allegati in questa sezione.';
$txt['cannot_post_new'] = 'Non hai permessi adeguati per inserire nuovi topic in questa sezione.';
$txt['cannot_post_reply_any'] = 'Non hai permessi adeguati per rispondere ai topic in questa sezione.';
$txt['cannot_post_reply_own'] = 'Non hai permessi adeguati per rispondere ai topic, nemmeno ai propri, in questa sezione.';
$txt['cannot_profile_remove_own'] = 'Non hai permessi adeguati per eliminare il tuo account.';
$txt['cannot_profile_remove_any'] = 'Non hai permessi adeguati per rimuovere gli account degli utenti!';
$txt['cannot_profile_extra_any'] = 'Non hai permessi adeguati per modificare le impostazioni del profilo.';
$txt['cannot_profile_identity_any'] = 'Non hai permessi adeguati per modificare le impostazioni dell\'account.';
$txt['cannot_profile_title_any'] = 'Non hai permessi adeguati per modificare i titoli personalizzati degli utenti.';
$txt['cannot_profile_extra_own'] = 'Non hai permessi adeguati per modificare i dati del tuo profilo.';
$txt['cannot_profile_identity_own'] = 'Non hai permessi adeguati per modificare la tua identit�.';
$txt['cannot_profile_title_own'] = 'Non hai permessi adeguati per modificare il tuo titolo personalizzato.';
$txt['cannot_profile_server_avatar'] = 'Non hai permessi adeguati per utilizzare un avatar memorizzato sul server.';
$txt['cannot_profile_upload_avatar'] = 'Non hai permessi adeguati per caricare un avatar.';
$txt['cannot_profile_remote_avatar'] = 'Non hai permessi adeguati per utilizzare un avatar remoto.';
$txt['cannot_profile_view_own'] = 'Non hai permessi adeguati per visualizzare il tuo profilo.';
$txt['cannot_profile_view_any'] = 'Non hai permessi adeguati per visualizzare alcun profilo.';
$txt['cannot_delete_own'] = 'Non hai permessi adeguati per eliminare i propri post in questa sezione.';
$txt['cannot_delete_replies'] = 'Non hai permessi adeguati per rimuovere questi post, anche se sono in risposta ad un topic aperto da te.';
$txt['cannot_delete_any'] = 'Non hai permessi adeguati per eliminare alcun post in questa sezione.';
$txt['cannot_report_any'] = 'Non hai permessi adeguati per segnalare post in questa sezione.';
$txt['cannot_search_posts'] = 'Non hai permessi adeguati per cercare nei post di questo forum.';
$txt['cannot_send_mail'] = 'Non hai permessi adeguati per inviare e-mail agli utenti.';
$txt['cannot_issue_warning'] = 'Non hai permessi adeguati per inviare richiami agli utenti.';
$txt['cannot_send_topic'] = 'Non hai permessi adeguati per inserire topic in questa sezione.';
$txt['cannot_send_email_to_members'] = 'Sorry, but the administrator has disallowed sending emails on this board.';
$txt['cannot_split_any'] = 'Non hai permessi adeguati per dividere alcun topic in questa sezione.';
$txt['cannot_view_attachments'] = 'Non hai permessi adeguati per scaricare o visualizzare gli allegati in questa sezione.';
$txt['cannot_view_mlist'] = 'Non hai permessi adeguati per visualizzare l\'elenco degli utenti.';
$txt['cannot_view_stats'] = 'Non hai permessi adeguati per visualizzare le statistiche del forum.';
$txt['cannot_who_view'] = 'Non hai permessi adeguati per visualizzare l\'elenco di chi � online.';

$txt['no_theme'] = 'Questo tema non esiste.';
$txt['theme_dir_wrong'] = 'La cartella predefinita per i temi non � corretta, fare clic su questo testo per sistemarla.';
$txt['registration_disabled'] = 'Spiacente, ma la registrazione � attualmente disattivata.';
$txt['registration_agreement_missing'] = 'The registration agreement file, agreement.txt, is either missing or empty.  Registrations have been disable until this is fixed';
$txt['registration_no_secret_question'] = 'Spiacente, ma non ci sono domande segrete impostate per questo utente.';
$txt['poll_range_error'] = 'Spiacente, ma il sondaggio deve durare pi� di 0 giorni.';
$txt['delFirstPost'] = 'Non si ha il permesso di eliminare il primo post di un topic<p>Se si desidera eliminare questo topic, fare clic sul link Rimuovi topic o chiedere assistenza ad un moderatore o ad un amministratore.</p>';
$txt['parent_error'] = 'Impossibile creare la sezione!';
$txt['login_cookie_error'] = 'Non � possibile effettuare l\'accesso.  Controllare le impostazioni dei cookie.';
$txt['incorrect_answer'] = 'Spiacente, ma non si � data la risposta corretta alla domanda. Fare clic su Indietro per riprovare, o tornare indietro due volte per utilizzare il metodo standard per riavere la password.';
$txt['no_mods'] = 'Nessun moderatore trovato!';
$txt['parent_not_found'] = 'Struttura della sezione corrotta: impossibile trovare la sezione di appartenenza';
$txt['modify_post_time_passed'] = 'Non si pu� modificare questo topic poich� il limite di tempo per le modifiche � scaduto.';

$txt['calendar_off'] = 'Non � possibile accedere al calendario in quanto al momento non attivo.';
$txt['calendar_export_off'] = 'You cannot export calendar events because that feature is currently disabled.';
$txt['invalid_month'] = 'Valore del mese non valido.';
$txt['invalid_year'] = 'Valore dell\'anno non valido.';
$txt['invalid_day'] = 'Giorno non valido.';
$txt['event_month_missing'] = 'Manca il mese dell\'evento.';
$txt['event_year_missing'] = 'Manca l\'anno dell\'evento.';
$txt['event_day_missing'] = 'Manca il giorno dell\'evento.';
$txt['event_title_missing'] = 'Manca un titolo dell\'evento.';
$txt['invalid_date'] = 'Data non valida.';
$txt['no_event_title'] = 'Non � stato inserito il titolo dell\'evento.';
$txt['missing_event_id'] = 'Manca l\'ID dell\'evento.';
$txt['cant_edit_event'] = 'Non si ha il permesso di modificare questo evento.';
$txt['missing_board_id'] = 'Manca l\'ID della sezione.';
$txt['missing_topic_id'] = 'Manca l\'ID del topic.';
$txt['topic_doesnt_exist'] = 'Il topic non esiste.';
$txt['not_your_topic'] = 'Non hai la "paternit�" di questo topic.';
$txt['board_doesnt_exist'] = 'La sezione non esiste.';
$txt['no_span'] = 'La funzionalit� intervallo � al momento disattivata.';
$txt['invalid_days_numb'] = 'Numero di giorni non valido per un intervallo.';

$txt['moveto_noboards'] = 'Non esistono sezioni dove spostare questo topic!';
$txt['topic_already_moved'] = 'This topic %1$s has been moved to the board %2$s, please check its new location before moving it again.';

$txt['already_activated'] = 'L\'account � gi� stato attivato.';
$txt['still_awaiting_approval'] = 'L\'account � ancora in attesa di approvazione da parte di un amministratore.';

$txt['invalid_email'] = 'Indirizzo e-mail o insieme di indirizzi e-mail non validi.<br />Esempio di indirizzo e-mail valido: evil.user@badsite.com.<br />Esempio di insieme di indirizzi e-mail: *@*.badsite.com';
$txt['invalid_expiration_date'] = 'La data di scadenza non � valida';
$txt['invalid_hostname'] = 'Nome host non valido.<br />Esempio di nome host valido: proxy4.badhost.com<br />Esempio di insieme di host: *.badhost.com';
$txt['invalid_ip'] = 'Indirizzo IP o insieme di indirizzi IP non validi.<br />Esempio di indirizzo IP valido: 127.0.0.1<br />Esempio di insieme di indirizzi IP: 127.0.0-20.*';
$txt['invalid_tracking_ip'] = 'IP non valido / Gamma di IP.<br />Esempio di indirizzo IP valido: 127.0.0.1<br />
Esempio di gamma di indirizzi IP valida: 127.0.0.*';
$txt['invalid_username'] = 'Nome utente non trovato';
$txt['no_user_selected'] = 'Member not found';
$txt['no_ban_admin'] = 'Non � possibile bloccare un amministratore. Bisogna prima degradarlo!';
$txt['no_bantype_selected'] = 'Non � stato selezionato alcun tipo di blocco';
$txt['ban_not_found'] = 'Blocco non trovato';
$txt['ban_unknown_restriction_type'] = 'Tipo di restrizione sconosciuto';
$txt['ban_name_empty'] = 'Non � stato inserito un nome per questa esclusione';
$txt['ban_name_exists'] = 'Il nome di questo ban (%1$s) � gi� esistente. Per favore, inserisci un altro nome.';
$txt['ban_trigger_already_exists'] = 'Il filtro di questo ban (%1$s) � gi� esistente in %2$s.';

$txt['recycle_no_valid_board'] = 'Non � stata selezionata una sezione valida per i topic cestinati';
$txt['post_already_deleted'] = 'The topic or message has already been moved to the recycle board. Are you sure you want to delete it completely?<br />If so follow <a href="%1$s">this link</a>';

$txt['login_threshold_fail'] = 'Spiacente, sono stati esauriti i tentativi di accesso a disposizione. Riprovare in un secondo momento.';
$txt['login_threshold_brute_fail'] = 'Spiacente, hai superato il numero massimo di tentativi per il login. Attendi per 30 secondi e riprova.';

$txt['who_off'] = 'Non � possibile accedere all\'elenco degli utenti online poich� non � attivo.';

$txt['merge_create_topic_failed'] = 'Errore nella creazione di un nuovo topic.';
$txt['merge_need_more_topics'] = 'Per unire dei topic � necessario indicarne almeno due.';

$txt['post_WaitTime_broken'] = 'The last posting from your IP was less than %1$d seconds ago. Please try again later.';
$txt['register_WaitTime_broken'] = 'You already registered just %1$d seconds ago!';
$txt['login_WaitTime_broken'] = 'You will have to wait about %1$d seconds to login again, sorry.';
$txt['pm_WaitTime_broken'] = 'The last personal message from your IP was less than %1$d seconds ago. Please try again later.';
$txt['reporttm_WaitTime_broken'] = 'The last topic report from your IP was less than %1$d seconds ago. Please try again later.';
$txt['sendtopic_WaitTime_broken'] = 'The last topic sent from your IP was less than %1$d seconds ago. Please try again later.';
$txt['sendmail_WaitTime_broken'] = 'The last email sent from your IP was less than %1$d seconds ago. Please try again later.';
$txt['search_WaitTime_broken'] = 'Your last search was less than %1$d seconds ago. Please try again later.';
$txt['remind_WaitTime_broken'] = 'Your last reminder was less than %1$d seconds ago. Please try again later.';

$txt['email_missing_data'] = 'Devi inserire qualcosa e nel campo Oggetto, e nelle caselle del massaggio.';

$txt['topic_gone'] = 'Il topic o la sezione che stai cercando non esiste pi� o non possiedi adeguati permessi per visualizzarla.';
$txt['theme_edit_missing'] = 'Non � possibile trovare il file che si sta cercando di modificare!';

$txt['no_dump_database'] = 'Solo gli amministratori possono eseguire il backup del database!';
$txt['pm_not_yours'] = 'Il messaggio privato che si vorrebbe citare non esiste o non � tra i propri. Tornare alla pagina precedente e riprovare.';
$txt['mangled_post'] = 'I dati inviati dal modulo sono incompleti. Tornare alla pagina precedente e riprovare.';
$txt['too_many_groups'] = 'Sorry, you selected too many groups, please remove some.';
$txt['post_upload_error'] = 'The post data is missing. This error is can be caused by trying to submit a file larger than allowed by the server.  Please contact your administrator if this problem continues.';
$txt['quoted_post_deleted'] = 'Il post che si sta cercando di citare non esiste, � stato cancellato o non � pi� visualizzabile.';
$txt['pm_too_many_per_hour'] = 'Hai superato il limite massimo di %1$d messaggi personali inviati in un\'ora.';
$txt['labels_too_many'] = 'Spiacente, %1$s messaggi hanno gi� superato il limite massimo di etichette disponibili!';

$txt['register_only_once'] = 'Spiacente, ma non si ha il permesso di registrare pi� account allo stesso tempo dallo stesso computer.';
$txt['admin_setting_coppa_require_contact'] = 'Devi inserire o un indirizzo postale o un numero di fax se � richiesta l\'approvazione di un genitore/tutore.';

$txt['error_long_name'] = 'Il nome desiderato � troppo lungo.';
$txt['error_no_name'] = 'Non � stato inserito un nome.';
$txt['error_bad_name'] = 'Il nome inserito non pu� essere usato poich� contiene un nome riservato.';
$txt['error_no_email'] = 'Non � stato inserito un indirizzo e-mail.';
$txt['error_bad_email'] = 'L\'indirizzo e-mail inserito non � valido.';
$txt['error_no_event'] = 'Non � stato inserito il nome dell\'evento.';
$txt['error_no_subject'] = 'Non � stato inserito l\'oggetto.';
$txt['error_no_question'] = 'Non � stata inserita nessuna domanda in questo sondaggio.';
$txt['error_no_message'] = 'Non � stato inserito il corpo del post.';
$txt['error_long_message'] = 'Il post supera la lunghezza massima consentita di %s caratteri.';
$txt['error_no_comment'] = 'Il campo dei commenti � stato lasciato vuoto.';
// duplicate of post_too_long in Post.{language}.php
$txt['error_post_too_long'] = 'Your message is too long. Please go back and shorten it, then try again.';
$txt['error_session_timeout'] = 'La sessione � scaduta durante l\'inserimento. Provare a reinserire il post.';
$txt['error_no_to'] = 'Non � stato indicato nessun destinatario.';
$txt['error_bad_to'] = 'Uno o pi� destinatari del campo \'A:\' non esistono.';
$txt['error_bad_bcc'] = 'Uno o pi� destinatari del campo \'CCN:\' non esistono.';
$txt['error_form_already_submitted'] = 'Questo post � gi� stato inviato! Forse hai accidentalmente fatto doppio clic sul pulsante di invio post o � stata aggiornata la pagina.';
$txt['error_poll_few'] = 'Devono esserci almeno due scelte!';
$txt['error_poll_many'] = 'You must have no more than 256 choices.';
$txt['error_need_qr_verification'] = 'Completa la verifica sottostante per inviare il tuo post.';
$txt['error_wrong_verification_code'] = 'Le lettere che hai digitato non corrispondono alle lettere mostrate nell\'immagine.';
$txt['error_wrong_verification_answer'] = 'Non hai risposto correttamente alle domande di verifica.';
$txt['error_need_verification_code'] = 'Per favore, inserisci il codice di verifica sottostante per visualizzare i risultati.';
$txt['error_bad_file'] = 'Spiacente, il file specificato non pu� essere aperto: %1$s';
$txt['error_bad_line'] = 'La riga specificata non � valida.';
$txt['error_draft_not_saved'] = 'There was an error saving the draft';

$txt['smiley_not_found'] = 'Emoticon non trovata.';
$txt['smiley_has_no_code'] = 'Non � stato fornito un codice per questa emoticon.';
$txt['smiley_has_no_filename'] = 'Non � stato fornito un nome file per questa emoticon.';
$txt['smiley_not_unique'] = 'Esiste gi� un\'emoticon con questo nome.';
$txt['smiley_set_already_exists'] = 'Esiste gi� un pacchetto di emoticon con questo indirizzo';
$txt['smiley_set_not_found'] = 'Pacchetto di emoticon non trovato';
$txt['smiley_set_dir_not_found'] = 'The directory of the smiley set %1$s is either invalid or cannot be accessed';
$txt['smiley_set_path_already_used'] = 'L\'indirizzo di questo pacchetto di emoticon � gi� usato da un altro pacchetto.';
$txt['smiley_set_unable_to_import'] = 'Impossibile importare il pacchetto di emoticon. La cartella non � valida o non � accessibile.';

$txt['smileys_upload_error'] = 'Caricamento del file fallito.';
$txt['smileys_upload_error_blank'] = 'Tutti i pacchetti di emoticon devono avere un\'immagine!';
$txt['smileys_upload_error_name'] = 'Tutte le emoticon devono avere lo stesso nome file!';
$txt['smileys_upload_error_illegal'] = 'Tipo non permesso.';

$txt['search_invalid_weights'] = 'La ricerca pesata non � configurata correttamente. Almeno un peso non deve essere nullo. Segnalare il problema ad un amministratore.';
$txt['unable_to_create_temporary'] = 'La funzione di ricerca non � in grado di creare delle tabelle temporanee. Riprovare.';

$txt['package_no_file'] = 'Impossibile trovare il file del pacchetto!';
$txt['packageget_unable'] = 'Impossibile collegarsi al server. Riprova utilizzando <a href="%1$s" target="_blank" class="new_win">questo indirizzo</a>.';
$txt['not_on_simplemachines'] = 'Spiacente, ma i pacchetti posso essere scaricati esclusivamente dal server di simplemachines.org.';
$txt['package_cant_uninstall'] = 'Questo pacchetto non � mai stato installato o � gi� stato disinstallato. Non � possibile disinstallarlo adesso.';
$txt['package_cant_download'] = 'Non � possibile scaricare o installare nuovi pacchetti poich� la cartella dei pacchetti o un file in essa non ha i permessi di scrittura!';
$txt['package_upload_error_nofile'] = 'Non hai selezionato alcun pacchetto da caricare.';
$txt['package_upload_error_failed'] = 'Impossibile caricare alcun pacchetto, assicurati che la cartella abbia adeguati permessi di scrittura!';
$txt['package_upload_error_exists'] = 'Il file che si sta caricando � gi� esistente sul server. Eliminarlo e poi riprovare.';
$txt['package_upload_error_supports'] = 'Il gestore pacchetti attualmente permette solo questi tipi di file: %1$s.';
$txt['package_upload_error_broken'] = 'Il caricamento del pacchetto � fallito per il seguente motivo:<br />&quot;%1$s&quot;';

$txt['package_get_error_not_found'] = 'Il pacchetto che stai cercando di installare non pu� essere localizzato. Potresti provare a caricare manualmente il pacchetto nella tua cartella Packages.';
$txt['package_get_error_missing_xml'] = 'Il pacchetto che stai cercando di installare � mancante del file package-info.xml, di solito presente nella root della directory del pacchetto.';
$txt['package_get_error_is_zero'] = 'Il pacchetto sembra essere vuoto, nonostante sia stato scaricato dal server. Controlla per favore che la cartella Packages e la sotto-cartella &quot;temp&quot; siano entrambe scrivibili. Se continui a riscontrare questo problema, prova ad estrarre il pacchetto sul tuo PC, a caricare i file estratti in una sotto-cartella di Packages e a provare nuovamente. Per esempio, se il pacchetto � chiamato shout.tar.gz, dovrai:<br />1) Scaricarlo sul tuo PC ed estrarre i file <br />2) Utilizzare un client FTP per creare una nuova cartella in &quot;Packages&quot, che in questo caso potrai chiamerai "shout".<br />3) Caricare tutti i file estratti dal pacchetto in questa cartella.<br />4) Tornare al gestore pacchetti, dove il pacchetto verr� automaticamente trovato da SMF.';
$txt['package_get_error_packageinfo_corrupt'] = 'SMF non ha potuto trovare alcuna informazione valida nel file package-info.xml incluso nel pacchetto. Potrebbe esserci un errore nella modifica, o il pacchetto potrebbe corrotto.';
$txt['package_get_error_is_theme'] = 'You can\'t install a Theme from this section, please use the <a href="{MANAGETHEMEURL}">Themes and Layout</a> management page to upload it';

$txt['no_membergroup_selected'] = 'Nessun gruppo selezionato';
$txt['membergroup_does_not_exist'] = 'Il gruppo non esiste o non � valido.';

$txt['at_least_one_admin'] = 'Ci deve essere almeno un amministratore del forum!';

$txt['error_functionality_not_windows'] = 'Al momento questa funzione non � disponibile per installazioni su server Windows.';

// Don't use entities in the below string.
$txt['attachment_not_found'] = 'Allegato non trovato';

$txt['error_no_boards_selected'] = 'Nessuna sezione valida selezionata!';
$txt['error_invalid_search_string'] = 'Hai dimenticato di inserire qualcosa da cercare?';
$txt['error_invalid_search_string_blacklist'] = 'Le parole inserite non permettono una ricerca adeguata. Riprova con parole differenti.';
$txt['error_search_string_small_words'] = 'Ogni parola deve essere lunga almeno due caratteri.';
$txt['error_query_not_specific_enough'] = 'La ricerca non ha prodotto alcun risultato valido.';
$txt['error_no_messages_in_time_frame'] = 'Nessun post trovato nel lasso di tempo selezionato.';
$txt['error_no_labels_selected'] = 'Nessuna etichetta selezionata!';
$txt['error_no_search_daemon'] = 'Impossibile accedere alla funzione di ricerca';

$txt['profile_errors_occurred'] = 'Si sono verificati i seguenti errori durante il salvataggio del profilo';
$txt['profile_error_bad_offset'] = 'La differenza di tempo � fuori intervallo';
$txt['profile_error_no_name'] = 'Il campo nome � stato lasciato vuoto';
$txt['profile_error_digits_only'] = 'The \'number of posts\' box can only contain digits.';
$txt['profile_error_name_taken'] = 'Il nome utente/nome visualizzato selezionato � gi� in uso';
$txt['profile_error_name_too_long'] = 'Il nome selezionato � troppo lungo. Non dovrebbe essere pi� lungo di 60 caratteri';
$txt['profile_error_no_email'] = 'Il campo e-mail � stato lasciato vuoto';
$txt['profile_error_bad_email'] = 'Non � stato inserito un indirizzo e-mail valido';
$txt['profile_error_email_taken'] = 'Un altro utente � gi� registrato con questo indirizzo e-mail';
$txt['profile_error_no_password'] = 'Non � stata inserita una password';
$txt['profile_error_bad_new_password'] = 'Le nuove password inserite non corrispondono';
$txt['profile_error_bad_password'] = 'La password inserita non � corretta';
$txt['profile_error_bad_avatar'] = 'L\'avatar selezionato � troppo grande, oppure non � un avatar';
$txt['profile_error_password_short'] = 'La password deve essere lunga almeno ' . (empty($modSettings['password_strength']) ? 4 : 8) . ' caratteri.';
$txt['profile_error_password_restricted_words'] = 'La password non deve contenere il nome utente, l\'indirizzo e-mail o altre parole comunemente usate.';
$txt['profile_error_password_chars'] = 'La password deve contenere una mescolanza di lettere maiuscole e minuscole e di numeri.';
$txt['profile_error_already_requested_group'] = 'Hai gi� una richiesta in corso per questo gruppo!';
$txt['profile_error_openid_in_use'] = 'Un altro utente sta gi� utilizzando quell\'indirizzo di autenticazione OpenID';
$txt['profile_error_signature_not_yet_saved'] = 'The signature has not been saved.';
$txt['profile_error_aim_too_long'] = 'The AIM nickname is too long.';
$txt['profile_error_personal_text_too_long'] = 'The personal text is too long.';
$txt['profile_error_user_title_too_long'] = 'The custom title is too long.';

$txt['mysql_error_space'] = ' - verifica lo spazio disponibile per il database o contatta l\'amministratore del server.';

$txt['icon_not_found'] = 'L\'immagine dell\'icona non � stata trovata nel tema predefinito - assicurarsi che l\'immagine sia stata caricata e riprovare.';
$txt['icon_after_itself'] = 'L\'icona non pu� essere posizionata dopo se stessa!';
$txt['icon_name_too_long'] = 'I nomi dei file delle icone non possono essere pi� lunghi di 16 caratteri';

$txt['name_censored'] = 'Il nome che hai inserito, %1$s, contiene parole vietate. Riprova con un altro nome.';

$txt['poll_already_exists'] = 'Un topic pu� avere un solo sondaggio associato!';
$txt['poll_not_found'] = 'Non c\'� un sondaggio associato a questo topic!';

$txt['error_while_adding_poll'] = 'Si sono verificati i seguenti errori durante l\'inserimento di questo sondaggio';
$txt['error_while_editing_poll'] = 'Si sono verificati i seguenti errori durante la modifica di questo sondaggio';

$txt['loadavg_search_disabled'] = 'A causa del carico eccessivo sul server, la funzione di ricerca � stata automaticamente e temporaneamente disabilitata. Riprovare pi� tardi.';
$txt['loadavg_generic_disabled'] = 'Spiacente, ma a causa del carico eccessivo sul server, la funzione non � al momento disponibile.';
$txt['loadavg_allunread_disabled'] = 'Le risorse del server sono sovraccariche, e non � possibile trovare tutte i topic non lette.';
$txt['loadavg_unreadreplies_disabled'] = 'Il server � al momento sovraccarico. Riprovare pi� tardi.';
$txt['loadavg_show_posts_disabled'] = 'Riprovare pi� tardi. I post di questo utente non sono al momento disponibili a causa del carico eccessivo sul server.';
$txt['loadavg_unread_disabled'] = 'Le risorse del server sono temporaneamente troppo sotto pressione per poter elencare i topic non letti.';
$txt['loadavg_userstats_disabled'] = 'Please try again later.  This member\'s statistics are not currently available due to high load on the server.';

$txt['cannot_edit_permissions_inherited'] = 'Non puoi modificare direttamente i permessi ereditati, devi prima You can not edit inherited permissions directly, you must either edit the parent group or edit the membergroup inheritance.';

$txt['mc_no_modreport_specified'] = 'Specifica quale segnalazione desideri visualizzare.';
$txt['mc_no_modreport_found'] = 'La segnalazione specificata non esiste o � off-limits per te.';

$txt['st_cannot_retrieve_file'] = 'Non � possibile trovare il file %1$s.';
$txt['admin_file_not_found'] = 'Non � possibile caricare il file richiesto: %1$s.';

$txt['themes_none_selectable'] = 'Almeno un tema deve essere selezionabile.';
$txt['themes_default_selectable'] = 'Il tema standard generale del forum deve essere selezionabile.';
$txt['ignoreboards_disallowed'] = 'L\'opzione per ignorare le sezioni non � stata abilitata.';

$txt['mboards_delete_error'] = 'Nessuna categoria selezionata!';
$txt['mboards_delete_board_error'] = 'Nessuna sezione selezionata!';

$txt['mboards_parent_own_child_error'] = 'Impossibile rendere sottosezione una sezione!';
$txt['mboards_board_own_child_error'] = 'Impossibile rendere sottosezione una sezione!';

$txt['smileys_upload_error_notwritable'] = 'Le seguenti cartelle degli smiley non sono scrivibili: %1$s';
$txt['smileys_upload_error_types'] = 'Image can only have the following extensions: %1$s.';

$txt['change_email_success'] = 'Dato che il tuo indirizzo e-mail � stato cambiato, ti � stata inviata una nuova e-mail di attivazione.';
$txt['resend_email_success'] = 'Una nuova e-mail di attivazione � stata inviata con successo.';

$txt['custom_option_need_name'] = 'Questa opzione del profilo deve avere un nome!';
$txt['custom_option_not_unique'] = 'Il nome campo non � unico!';
$txt['custom_option_regex_error'] = 'The regex you entered is not valid';

$txt['warning_no_reason'] = 'Devi inserire un motivo per la modifica dello stato richiami dell\'utente.';
$txt['warning_notify_blank'] = 'Hai selezionato di notificare l\'utente ma non hai completato i campi oggetto/messaggio.';

$txt['cannot_connect_doc_site'] = 'Non � possibile collegarsi al manuale online di Simple Machines. Accertati che la configurazione del tuo server consenta le connessione esterne ad Internet e riprova.';

$txt['movetopic_no_reason'] = 'Devi inserire un motivo per lo spostamento del topic, oppure togliere il segno di spunta dall\'opzione per aggiungere un topic di reindirizzamento.';

// OpenID error strings
$txt['openid_server_bad_response'] = 'L\'identificatore richiesto non ha restituito le informazioni necessarie.';
$txt['openid_return_no_mode'] = 'Il provider dell\'identit� non ha risposto con la modalit� OpenID.';
$txt['openid_not_resolved'] = 'Il provider dell\'identit� non ha approvato la tua richiesta.';
$txt['openid_no_assoc'] = 'Non � possibile trovare l\'associazione richiesta con il provider dell\'identit�.';
$txt['openid_sig_invalid'] = 'La firma del provider dell\'identit� non � valida.';
$txt['openid_load_data'] = 'Non � stato possibile recuperare i dati dalla tua richiesta di login. Riprova.';
$txt['openid_not_verified'] = 'L\'indirizzo OpenID fornito non � stato ancora verificato. Fai login per accedere alla verifica.';

$txt['error_custom_field_too_long'] = 'Il campo &quot;%1$s&quot; non pu� superare i %2$d caratteri di lunghezza.';
$txt['error_custom_field_invalid_email'] = 'Il campo &quot;%1$s&quot; deve essere un indirizzo e-mail valido.';
$txt['error_custom_field_not_number'] = 'Il campo &quot;%1$s&quot; deve essere numerico.';
$txt['error_custom_field_inproper_format'] = 'Il campo &quot;%1$s&quot; � in un formato non valido.';
$txt['error_custom_field_empty'] = 'Il campo &quot;%1$s&quot; non pu� essere lasciato in bianco.';

$txt['email_no_template'] = 'Il template e-mail &quot;%1$s&quot; non pu� essere trovato.';

$txt['search_api_missing'] = 'Non � possibile trovare l\'API di ricerca! Contatta l\'amministratore per verificare che siano stati caricati correttamente i file relativi.';
$txt['search_api_not_compatible'] = 'L\'API di ricerca selezionata per il forum, � obsoleta - Ritorno alla ricerca standard in corso. Per ulteriori informazioni, controlla il file %1$s.';

// Restore topic/posts
$txt['cannot_restore_first_post'] = 'Non puoi ripristinare il primo post in un topic.';
$txt['parent_topic_missing'] = 'Il topic di origine di questo post in ripristino � stato cancellato.';
$txt['restored_disabled'] = 'Il ripristino dei topic � stato disabilitato.';
$txt['restore_not_found'] = 'I seguenti post non possono essere ripristinati; il topic originale potrebbe essere stato rimosso:<ul style="margin-top: 0px;">%1$s</ul>Sar� necessario spostarli manualmente.';

$txt['error_invalid_dir'] = 'La directory inserita non � valida.';

$txt['error_sqlite_optimizing'] = 'Sqlite sta ottimizzando il database, il forum rimarr� inaccessibile fino a quando il sistema non avr� terminato. Prova a ricaricare la pagina fra qualche istante.';

?>