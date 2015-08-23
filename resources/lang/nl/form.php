<?php
return [

    // new user:
    'bank_name'                   => 'Banknaam',
    'bank_balance'                => 'Saldo',
    'savings_balance'             => 'Saldo van spaarrekening',
    'credit_card_limit'           => 'Credit card limiet',

    'name'                        => 'Naam',
    'active'                      => 'Actief',
    'amount_min'                  => 'Minimumbedrag',
    'amount_max'                  => 'Maximumbedrag',
    'match'                       => 'Reageert op',
    'repeat_freq'                 => 'Herhaling',
    'account_from_id'             => 'Van account',
    'account_to_id'               => 'Naar account',
    'account_id'                  => 'Betaalrekening',
    'budget_id'                   => 'Budget',
    'openingBalance'              => 'Startsaldo',
    'tagMode'                     => 'Tag modus',
    'tagPosition'                 => 'Tag locatie',
    'virtualBalance'              => 'Virtuele saldo',
    'longitude_latitude'          => 'Locatie',
    'targetamount'                => 'Doelbedrag',
    'accountRole'                 => 'Rol van rekening',
    'openingBalanceDate'          => 'Startsaldodatum',
    'ccType'                      => 'Betaalplan',
    'ccMonthlyPaymentDate'        => 'Betaaldatum',
    'piggy_bank_id'               => 'Spaarpotje',
    'returnHere'                  => 'Keer terug',
    'returnHereExplanation'       => 'Terug naar deze pagina na het opslaan.',
    'returnHereUpdateExplanation' => 'Terug naar deze pagina na het wijzigen.',
    'description'                 => 'Omschrijving',
    'expense_account'             => 'Crediteur',
    'revenue_account'             => 'Debiteur',
    'amount'                      => 'Bedrag',
    'date'                        => 'Datum',
    'category'                    => 'Categorie',
    'tags'                        => 'Tags',
    'deletePermanently'           => 'Verwijderen',
    'cancel'                      => 'Annuleren',
    'targetdate'                  => 'Doeldatum',
    'tag'                         => 'Tag',
    'under'                       => 'Onder',
    'symbol'                      => 'Symbool',
    'code'                        => 'Code',
    'iban'                        => 'IBAN',
    'csv'                         => 'CSV-bestand',
    'has_headers'                 => 'Kolomnamen op de eerste rij?',
    'date_format'                 => 'Datumformaat',
    'csv_config'                  => 'Configuratiebestand',
    'specifix'                    => 'Bank- or of bestandsspecifieke opties',
    'csv_import_account'          => 'Standaard rekening voor importeren',
    'attachments[]'               => 'Bijlagen',

    'title'                       => 'Titel',
    'notes'                       => 'Notities',
    'filename'                    => 'Bestandsnaam',
    'mime'                        => 'Bestandstype',
    'size'                        => 'Grootte',

    'store_new_withdrawal'        => 'Nieuwe uitgave opslaan',
    'store_new_deposit'           => 'Nieuwe inkomsten opslaan',
    'store_new_transfer'          => 'Nieuwe overschrijving opslaan',
    'add_new_withdrawal'          => 'Maak nieuwe uitgave',
    'add_new_deposit'             => 'Maak nieuwe inkomsten',
    'add_new_transfer'            => 'Maak nieuwe overschrijving',
    'noPiggybank'                 => '(geen spaarpotje)',
    'noBudget'                    => '(geen budget)',

    'delete_account'              => 'Verwijder rekening ":name"',
    'delete_bill'                 => 'Verwijder contract ":name"',
    'delete_budget'               => 'Verwijder budget ":name"',
    'delete_category'             => 'Verwijder categorie ":name"',
    'delete_currency'             => 'Verwijder valuta ":name"',
    'delete_journal'              => 'Verwijder transactie met omschrijving ":description"',
    'delete_attachment'           => 'Verwijder bijlage ":name"',

    'tag_areYouSure'              => 'Weet je zeker dat je de tag met naam ":tag" wilt verwijderen?',
    'attachment_areYouSure'       => 'Weet je zeker dat je de bijlage met naam ":name" wilt verwijderen?',
    'account_areYouSure'          => 'Weet je zeker dat je de rekening met naam ":name" wilt verwijderen?',
    'bill_areYouSure'             => 'Weet je zeker dat je het contract met naam ":name" wilt verwijderen?',
    'budget_areYouSure'           => 'Weet je zeker dat je het budget met naam ":name" wilt verwijderen?',
    'category_areYouSure'         => 'Weet je zeker dat je het category met naam ":name" wilt verwijderen?',
    'currency_areYouSure'         => 'Weet je zeker dat je de valuta met naam ":name" wilt verwijderen?',
    'piggyBank_areYouSure'        => 'Weet je zeker dat je het spaarpotje met naam ":name" wilt verwijderen?',
    'journal_areYouSure'          => 'Weet je zeker dat je de transactie met naam ":description" wilt verwijderen?',

    'permDeleteWarning'           => 'Dingen verwijderen uit Firefly is permanent en kan niet ongedaan gemaakt worden.',
    'also_delete_transactions'    => 'Ook de enige transactie verbonden aan deze rekening wordt verwijderd.' .
                                     '|Ook alle :count transacties verbonden aan deze rekening worden verwijderd.',
    'also_delete_piggyBanks'      => 'Ook het spaarpotje verbonden aan deze rekening wordt verwijderd.' .
                                     '|Ook alle :count spaarpotjes verbonden aan deze rekening worden verwijderd.',
    'bill_keep_transactions'      => 'De transactie verbonden aan dit contract blijft bewaard.' .
                                     '|De :count transacties verbonden aan dit contract blijven bewaard.',
    'budget_keep_transactions'    => 'De transactie verbonden aan dit budget blijft bewaard.' .
                                     '|De :count transacties verbonden aan dit budget blijven bewaard.',
    'category_keep_transactions'  => 'De transactie verbonden aan deze categorie blijft bewaard.' .
                                     '|De :count transacties verbonden aan deze categorie blijven bewaard.',
    'tag_keep_transactions'       => 'De transactie verbonden aan deze tag blijft bewaard.' .
                                     '|De :count transacties verbonden aan deze tag blijven bewaard.',
];
