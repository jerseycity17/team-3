#6 Degrees Platform DB
Create database if not exists Degree_DB;

Use Degree_DB;


Create Table if not exists UserInfo
(
    user_id int auto_increment Primary Key,
    username Text not null,
    pass Text not null,
    email Text not null,
    facebook Text default null
);

Create table if not exists CampaignDetail
(
    creator_id int,

    campaign_id int auto_increment Primary Key,
    campaign_name text Not null,
    campaign_info Text Not Null,
    campaign_hashtag Text,
    campaign_degree Int not Null Default 1,
    expiration Datetime,
  
    Foreign Key (creator_id) references UserInfo(user_id)
);

Create table if not exists CampaignAssociation
(
    user_id int,
    campaign_id int,
    user_degree int,
    user_hiddendegree int,
    Primary Key(user_id, campaign_id),
    Foreign Key (user_id) references UserInfo(user_id),
    Foreign Key (campaign_id) references CampaignDetail(campaign_id)
);

Create table if not exists ChallengeStatus
(
    user_id int,
    campaign_id int,
    challenge_id int Auto_Increment,
    challenge_number int not null,
    challenge_info Text not null,
    challenge_type set("Donation","Volunteer","Share","Other"),
    challenge_status boolean default false,
    quantity Int,
    Primary Key(challenge_id, user_id, campaign_id),
    Foreign Key (user_id) references UserInfo(user_id),
    Foreign Key (campaign_id) references CampaignDetail(campaign_id)
);

Create table if not exists InvitedBy

(
    parent int,
    invitee int,
    campaign_id int,
    invitationstatus set("accept","decline", "Not Respond"),
    Primary Key (parent, invitee, campaign_id),
    Foreign Key(parent) references UserInfo(user_id),
    Foreign Key (invitee) references UserInfo(user_id),

    Foreign Key (campaign_id) references CampaignDetail(campaign_id)
);

/*Explain UserInfo;
Explain CampaignDetail;
Explain CampaignDegree;
Explain ChaStatus;
Explain Invitedby;*/



