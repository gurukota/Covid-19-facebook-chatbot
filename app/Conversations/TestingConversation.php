<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class TestingConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('Avoid contact with other people and self-isolate if you think you\'ve been exposed to COVID-19, or you\'re showing symptoms. COVID-19 symptoms include a fever, cough, headache, shortness of breath. Reply SYMPTOMS for more information.

        If you\'re feeling slightly ill and need non-urgent medical care:
        - Call a doctor or your nearest clinic.
        - Call the Covid-19 helpline (***********) and they will help you find a testing facility.
        
        If you\'re feeling very ill and need urgent care:
        - Call your emergency services or go to the emergency department.
        - Put on a face mask before leaving your home. Reply MASK for more information.
        
        Public sector testing is free. If you\'re using a Private Laboratory, ask them about the cost of the test. Check with your medical aid if they will help cover the costs for the test.
    
        What is the difference between testing and screening for COVID-19?
        
        Screening: People get screened to find out whether they\'re at risk of getting the virus. They\'ll be asked questions about their recent activities and health. People can also get screened through temperature scanners which helps identify symptoms like a fever.
        
        Testing: This includes collecting a biological sample from a suspected patient like a nasal swab or blood sample which gets sent to a laboratory. At the lab, the sample is tested for the virus or its antibodies.
        
        -----
        Reply:
        
        💟 CHECK to use the COVID-19 risk assessment tool
        🤒 SYMPTOMS for more on symptoms
        📌 MENU to return to the main menu');
    }
}
