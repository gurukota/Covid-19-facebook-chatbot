<?php

namespace App\Conversations;

use BotMan\BotMan\Messages\Conversations\Conversation;

class PregnantConversation extends Conversation
{
    /**
     * Start the conversation.
     *
     * @return mixed
     */
    public function run()
    {
        $this->say('Pregnant women seem to be equally at risk of COVID-19 as non-pregnant women and experience the same symptoms.

        You can read more about COVID-19, the symptoms, risks, and testing and self-isolation procedures by replying using the words in BOLD at the end of this message.
        
        Can pregnant women get COVID-19?
        - Pregnant women can be infected by COVID-19.
        - Make sure that you take all hygiene steps to prevent becoming infected
        - Make sure you stick to all the Risk Level regulations.
        - There is currently no vaccine to prevent you from getting COVID-19.
        - But think about getting the flu-vaccine to prevent flu during winter.
        - Remember to eat well, take your pregnancy vitamins and get enough rest.
        
        Can an unborn baby get COVID19?
        - There is currently no proof that COVID-19 can be transferred to an unborn baby.
        
        Symptoms
        - The main symptoms are fever, tiredness, sore throat, dry cough and shortness of breath.
        - Pregnancy can mask these symptoms, so be on the lookout!
        - Report symptoms even if they are mild.
        - Phone your local health facility or the COVID-19 helpline (0800 029 999) to find out if you should be tested.
        
        How does COVID_19 affect pregnancy?
        - There is no known difference between COVID-19 in pregnant and non-pregnant women.
        - Although pregnant women are generally more likely to get infections, there is no evidence that they are at a higher risk of getting COVID-19.
        - If you have other illnesses (like TB, heart disease, HIV or diabetes) you may be more at risk.
        
        Testing for COVID-19 in pregnant women
        - Pregnancy does not change the criteria for testing for COVID-19.
        - If you have symptoms of COVID-19, you need to be tested.
        - If you have been in contact with someone that has COVID-19, you need to be tested.
        - Phone the helpline or your local antenatal clinic.
        - They will advise if you need to be tested and where to go.
        - In some cases a health care worker will come to your home.
        - If you have no phone, visit the nearest clinic.
        - Tell reception as soon as you arrive that you think you have signs of COVID-19
        - You will be kept in a separate room or outside until a health worker can see you.
        
        Treatment for pregnant women with COVID-10
        - If you test positive, you should inform your doctor or antenatal care facility.
        - If your symptoms are mild, you will be told to self-isolate at home.
        - If your symptoms are severe, you will be admitted to a specialised hospital.
        
        Self-isolation
        - Guidelines for self-isolation are the same for pregnant women.
        - You should self-isolate for 14 days to try to protect yourself and those around you.
        - If you can’t self-isolate at home, you will be advised about isolation or quarantine facilities.
        - During self-isolation, your antenatal visits will be postponed for 14 days unless there is an emergency, or you go into labour or experience pregnancy danger signs (like vaginal bleeding, baby not kicking for a day, or your water breaks.)
        
        If you have bad symptoms and are admitted to hospital, measures will be taken to prevent the spread of the virus.
        - You will stay in a separate room.
        - You will wear a mask.
        - The hospital team will wear protective clothing.
        - Do not be afraid -- this is all to help prevent the spread of the virus.
        
        -----
        Or Reply:
        ℹ️ ABOUT  to learn what COVID-19 is and how it spreads.
        👍 PREVENTION for how to try and prevent infection.
        ⚠️ RISKS to find out more pre-existing conditions.
        🤒 SYMPTOMS for more on COVID-19 symptoms.
        📌 MENU to return to the main menu.');
    }
}
