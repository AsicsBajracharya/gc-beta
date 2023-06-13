<?php 
$current_user_id = get_current_user_id();
$user_persona = get_field('user_persona', 'user_' . $current_user_id);
$url = get_home_url();

//if($user_persona == 'Growth Partner' ) : 
    if (have_rows('landing_page_content')) :
        while (have_rows('landing_page_content')) : the_row();
            switch (get_row_layout()) {
                case 'header_section':
                    get_template_part('template-parts/section', 'header');
                    break; 
                case 'scroll_navigation':
                    get_template_part('template-parts/section', 'navigation');
                    break;
                case 'strategic_imperative_section':
                    get_template_part('template-parts/section', 'strategicimperatives');
                    break;  
                case 'banner_section':
                    get_template_part('template-parts/section', 'banner');
                    break;  
                case 'three_pillars':
                    get_template_part('template-parts/section', 'pillars');
                    break;  
                case 'critical_issues_section':
                    get_template_part('template-parts/section', 'critical_issues');
                    break;  
                case 'best_practices_section':
                    get_template_part('template-parts/section', 'best_practices');
                    break; 
                case 'growth_community_hero_section':
                    get_template_part('template-parts/section', 'growth_community_hero');
                    break;
                case 'growth_community_member_section':
                    get_template_part('template-parts/section', 'community_member');
                    break;
                case 'growth_council_think_tanks_series_section':
                    get_template_part('template-parts/section', 'thinktank');
                    break;
                case 'event_calender_section':
                    get_template_part('template-parts/section', 'calender_events');
                    break;    
                case 'growth_content_hero_section':
                    get_template_part('template-parts/section', 'growth_content_hero');
                    break;
                case 'growth_content_section':
                    get_template_part('template-parts/section', 'growth_content');
                    break;
                case 'growth_coaching_hero_section':
                    get_template_part('template-parts/section', 'growth_coaching_hero');
                    break;       
                case 'what_is_growth_coaching':
                    get_template_part('template-parts/section', 'what_is_growth_coaching');
                    break;
                case 'traits_section':
                    get_template_part('template-parts/section', 'traits');
                    break;
                case 'gpd_dialogue_section':
                    get_template_part('template-parts/section', 'gpd_dialogue');
                    break;
                case 'executive_coaching_clinic_section':
                    get_template_part('template-parts/section', 'executive_coaching_clinic');
                    break;
                case 'service_manager_section':
                    get_template_part('template-parts/section', 'service_manager');
                    break;
                case 'transformational_journey_section':
                    get_template_part('template-parts/section', 'transformational_journey');
                    break;
                case 'footer':
                    get_template_part('template-parts/section', 'footer');
                    break;

                    // Prospect Page specific sectiond
                case 'growth_council':
                    get_template_part('template-parts/section', 'growth_council');
                    break;
                case 'growth_innovation_float_prospect':
                    get_template_part('template-parts/section', 'growth_innovation_float');
                    break;
                case 'growth_partners_members':
                    get_template_part('template-parts/section', 'growth_partners_members');
                    break;
                case 'growth_council_think_tank_series_prospect':
                    get_template_part('template-parts/section', 'gctts_prospect');
                    break;       
                case 'strategic_imperative_prospect':                    
                    get_template_part('template-parts/section', 'strategic_imperative_prospect');
                    break;
                case 'innovation_tours_prospect':
                    get_template_part('template-parts/section', 'innovation_tours_prospect');
                    break;
                case 'executive_mindxchange_prospect':
                    get_template_part('template-parts/section', 'executive_mindxchange_prospect');
                    break;
                case 'stories':
                    get_template_part('template-parts/section', 'stories');
                    break;
                case 'whats_happening_in_the_sectors':
                    get_template_part('template-parts/section', 'whats_happening_in_the_sectors');
                    break;
                case 'why_growth_innovation_leadership_council':
                    get_template_part('template-parts/section', 'why_growth_innovation_leadership_council');
                    break;
                case 'testimonials':
                    get_template_part('template-parts/section', 'testimonials');
                    break;           
                
                 // Member Page specific sectiond
                 case 'frost_radar_member':
                    get_template_part('template-parts/section', 'frost_radar_member');
                    break;
                case 'executive_mindxchange_member':
                    get_template_part('template-parts/section', 'executive_mindxchange_member');
                    break;


                // Unused Sections    
                case 'practices_section':
                    get_template_part('template-parts/section', 'practices');
                    break;      
                case 'intro_section':
                    get_template_part('template-parts/section', 'intro');
                    break;    
                case 'coaching_section':
                    get_template_part('template-parts/section', 'coaching');
                    break;      
                case 'expert_section':
                    get_template_part('template-parts/section', 'expert');
                    break;
                case 'feature_section':
                    get_template_part('template-parts/section', 'feature');
                    break;    
                case 'news_section':
                    get_template_part('template-parts/section', 'news');
                    break;    
                case 'form_section':
                    get_template_part('template-parts/section', 'form');
                    break;                          
            }
        endwhile;
    endif;
// else :
//     wp_redirect($url);
//     exit();
// endif;

