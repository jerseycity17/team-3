#6 Degrees Platform DB
Create database if not exists Degree_DB;

Use Degree_DB;


Create Table if not exists UserInfo
(
    User_id int auto_increment Primary Key,
    Username Text not null,
    Pass Text not null,
    Email Text not null,
    Facebook Text default null
);

Create table if not exists CampaignDetail
(
    creator_id int,
    Campaign_ID int auto_increment Primary Key,
    Campaign_name text Not null,
    Capaign_Info Text Not Null,
    Campaign_Hashtag Text,
    CampaignDegree Int not Null Default 1,
    Expiration Datetime,
    Foreign Key (creator_id) references UserInfo(user_id)
);

Create table if not exists CampaignAssociation
(
    User_id int,
    Campaign_ID int,
    User_degree int,
    User_hiddendegree int,
    Primary Key(user_id, Campaign_ID),
    Foreign Key (User_id) references UserInfo(User_id),
    Foreign Key (Campaign_ID) references CampaignDetail(Campaign_ID)
);

Create table if not exists ChaStatus
(
    User_id int,
    Campaign_ID int,
    Challenge_ID int Auto_Increment,
    Challenge_number int not null,
    Challenge_info Text not null,
    Challenge_type set("Donation","Volunteer","Share","Other"),
    Challenge_status boolean default false,
    Quantity Int,
    Primary Key(Challenge_ID, User_id, Campaign_ID),
    Foreign Key (User_id) references UserInfo(User_id),
    Foreign Key (Campaign_ID) references CampaignDetail(Campaign_ID)
);

Create table if not exists Invitedby
(
    parent int,
    invitee int,
    campaign_id int,
    invitationstatus set("accept","decline", "Not Respond"),
    Primary Key (parent, invitee, campaign_id),
    Foreign Key(parent) references UserInfo(user_id),
    Foreign Key (invitee) references UserInfo(user_id),
    Foreign Key (campaign_id) references CampaignDetail(Campaign_id)
);

Explain UserInfo;
Explain CampaignDetail;
Explain CampaignDegree;
Explain ChaStatus;
Explain Invitedby;


