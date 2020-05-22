<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class SymptomsConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('The most common symptoms of COVID-19 are: 
        -fever 
        -tiredness 
        -sore throat 
        -dry cough 
        -shortness of breath  
        
        Important: For an estimated 80% of people infected with COVID-19, the symptoms are mild and they need to self-isolation to stop the spread of the disease. For a small number, the consequences are more serious.   
        
        Don\'t panic: Having the symptoms doesn\'t mean that you have COVID-19. The symptoms are like other illnesses that are much more common, like the flu.  
        
        What is the difference between influenza (flu) and COVID-19? 
        Don’t get mixed up between the flu and COVID-19. There are some important differences.
        
        Speed of transmission: The flu has a shorter incubation period than COVID-19. Incubation refers to the time between getting infected and noticing symptoms. 
        
        Severity: Currently around 15% of COVID-19 infections are severe, requiring oxygen. About 5% is critical, requiring ventilation. The number of severe and critical infections are higher than those caused by the flu. 
        
        Mortality: The mortality of COVID-19 appears higher than for the flu. 
        
        Learn more to be ready for COVID-19 at https://www.who.int/health-topics/coronavirus  
        
        📌 Reply MENU to return to the main menu.');
    }
}
