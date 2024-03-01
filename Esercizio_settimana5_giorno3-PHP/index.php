<?php
class FormGenerator {
    private $formAction;
    
    public function __construct($action) {
        $this->formAction = $action;
    }
    
    public function generateForm() {
        return '
            <form action="' . $this->formAction . '" method="post">
                <label for="lastname">Last Name:</label>
                <input type="text" id="lastname" name="lastname" required><br>
                
                <label for="firstname">First Name:</label>
                <input type="text" id="firstname" name="firstname" required><br>
                
                <label for="email">Email:</label>
                <input type="email" id="email" name="email" required><br>
                
                <label for="password">Password:</label>
                <input type="password" id="password" name="password" required><br>
                
                <input type="submit" value="Submit">
            </form>
        ';
    }
}

// Esempio di utilizzo:
$formAction = 'process_form.php'; // Sostituisci con l'URL del tuo script di elaborazione del form
$formGenerator = new FormGenerator($formAction);
$formHtml = $formGenerator->generateForm();
echo $formHtml;