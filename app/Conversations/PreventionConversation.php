<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class PreventionConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('Reduce your chances of getting or spreading COVID-19 by taking some simple safety measures:   

        ✅ Wash your hands often with soap and water for at least 20 seconds. You can also rub your hands with an alcohol-based hand sanitiser. It should be at least 60% alcohol.  
        ✅ Avoid touching your eyes, nose and mouth.  
        ✅ Cover your cough or sneeze with your bent elbow or a tissue. Throw it away after you\'ve used it.  
        ✅ Avoid contact with infected people. Stay at least 1-meter away from anyone who is coughing or sneezing. 
        ✅ Stay at home if you feel ill. If you have a fever, cough and difficulty breathing, phone your health worker.
        ✅ Practice Social Distancing (Reply SOCIAL for guidelines)
        ✅ Wear a cloth mask in public places. Masks help slow the spread of the infection. Medical masks are reserved for healthcare workers. (Reply MASK for more info)
        
        There are currently no vaccines available to protect you against COVID-19 infection.   
        
        Watch this video to get tips on how to prevent COVID-19: https://youtu.be/D4TVCc80xZ0  
        
        📌 Reply MENU to return to the main menu.');
    }
}
