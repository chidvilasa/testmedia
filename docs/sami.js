
(function(root) {

    var bhIndex = null;
    var rootPath = '';
    var treeHtml = '        <ul>                <li data-name="namespace:" class="opened">                    <div style="padding-left:0px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href=".html">MediaFoundry</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:MediaFoundry_Api" class="opened">                    <div style="padding-left:18px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="MediaFoundry/Api.html">Api</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="namespace:MediaFoundry_Api_Contracts" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="MediaFoundry/Api/Contracts.html">Contracts</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:MediaFoundry_Api_Contracts_ApiClient" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="MediaFoundry/Api/Contracts/ApiClient.html">ApiClient</a>                    </div>                </li>                            <li data-name="class:MediaFoundry_Api_Contracts_OpenGraphable" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="MediaFoundry/Api/Contracts/OpenGraphable.html">OpenGraphable</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="namespace:MediaFoundry_Api_Entities" >                    <div style="padding-left:36px" class="hd">                        <span class="glyphicon glyphicon-play"></span><a href="MediaFoundry/Api/Entities.html">Entities</a>                    </div>                    <div class="bd">                                <ul>                <li data-name="class:MediaFoundry_Api_Entities_Category" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="MediaFoundry/Api/Entities/Category.html">Category</a>                    </div>                </li>                            <li data-name="class:MediaFoundry_Api_Entities_Entity" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="MediaFoundry/Api/Entities/Entity.html">Entity</a>                    </div>                </li>                            <li data-name="class:MediaFoundry_Api_Entities_Episode" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="MediaFoundry/Api/Entities/Episode.html">Episode</a>                    </div>                </li>                            <li data-name="class:MediaFoundry_Api_Entities_Event" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="MediaFoundry/Api/Entities/Event.html">Event</a>                    </div>                </li>                            <li data-name="class:MediaFoundry_Api_Entities_Genre" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="MediaFoundry/Api/Entities/Genre.html">Genre</a>                    </div>                </li>                            <li data-name="class:MediaFoundry_Api_Entities_Season" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="MediaFoundry/Api/Entities/Season.html">Season</a>                    </div>                </li>                            <li data-name="class:MediaFoundry_Api_Entities_Series" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="MediaFoundry/Api/Entities/Series.html">Series</a>                    </div>                </li>                            <li data-name="class:MediaFoundry_Api_Entities_Video" >                    <div style="padding-left:62px" class="hd leaf">                        <a href="MediaFoundry/Api/Entities/Video.html">Video</a>                    </div>                </li>                </ul></div>                </li>                            <li data-name="class:MediaFoundry_Api_Client" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="MediaFoundry/Api/Client.html">Client</a>                    </div>                </li>                            <li data-name="class:MediaFoundry_Api_CollectsEntities" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="MediaFoundry/Api/CollectsEntities.html">CollectsEntities</a>                    </div>                </li>                            <li data-name="class:MediaFoundry_Api_EventSchedule" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="MediaFoundry/Api/EventSchedule.html">EventSchedule</a>                    </div>                </li>                            <li data-name="class:MediaFoundry_Api_MediaFoundryApiClientServiceProvider" >                    <div style="padding-left:44px" class="hd leaf">                        <a href="MediaFoundry/Api/MediaFoundryApiClientServiceProvider.html">MediaFoundryApiClientServiceProvider</a>                    </div>                </li>                </ul></div>                </li>                </ul></div>                </li>                </ul>';

    var searchTypeClasses = {
        'Namespace': 'label-default',
        'Class': 'label-info',
        'Interface': 'label-primary',
        'Trait': 'label-success',
        'Method': 'label-danger',
        '_': 'label-warning'
    };

    var searchIndex = [
                    
            {"type": "Namespace", "link": "MediaFoundry.html", "name": "MediaFoundry", "doc": "Namespace MediaFoundry"},{"type": "Namespace", "link": "MediaFoundry/Api.html", "name": "MediaFoundry\\Api", "doc": "Namespace MediaFoundry\\Api"},{"type": "Namespace", "link": "MediaFoundry/Api/Contracts.html", "name": "MediaFoundry\\Api\\Contracts", "doc": "Namespace MediaFoundry\\Api\\Contracts"},{"type": "Namespace", "link": "MediaFoundry/Api/Entities.html", "name": "MediaFoundry\\Api\\Entities", "doc": "Namespace MediaFoundry\\Api\\Entities"},
            {"type": "Interface", "fromName": "MediaFoundry\\Api\\Contracts", "fromLink": "MediaFoundry/Api/Contracts.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html", "name": "MediaFoundry\\Api\\Contracts\\ApiClient", "doc": "&quot;MediaFoundry API Client interface&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_categories", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::categories", "doc": "&quot;Return an array of Category entities from the categories endpoint,\nor the specific category if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_episodes", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::episodes", "doc": "&quot;Return an array of Episode entities from the episodes endpoint,\nor the specific category if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_events", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::events", "doc": "&quot;Return an array of Event entities from the events endpoint,\nor the specific event if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_genres", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::genres", "doc": "&quot;Return an array of Genre entities from the gendes endpoint,\nor the specific genre if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_seasons", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::seasons", "doc": "&quot;Return an array of Season entities from the seasons endpoint,\nor the specific season if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_search", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::search", "doc": "&quot;Search the API.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_series", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::series", "doc": "&quot;Return an array of Season entities from the seasons endpoint,\nor the specific season if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_videos", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::videos", "doc": "&quot;Return an array of Video entities from the videos endpoint,\nor the specific video if the $entity_id is provided. If\n$filter is supplied, the return will be filtered videos.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_next", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::next", "doc": "&quot;Get the next link, if set.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_previous", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::previous", "doc": "&quot;Get the previous link, if set.&quot;"},
            
            {"type": "Interface", "fromName": "MediaFoundry\\Api\\Contracts", "fromLink": "MediaFoundry/Api/Contracts.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "doc": "&quot;OpenGraph interface.&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "fromLink": "MediaFoundry/Api/Contracts/OpenGraphable.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html#method_ogTitle", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable::ogTitle", "doc": "&quot;Get the OpenGraph title value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "fromLink": "MediaFoundry/Api/Contracts/OpenGraphable.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html#method_ogType", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable::ogType", "doc": "&quot;Get the OpenGraph type value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "fromLink": "MediaFoundry/Api/Contracts/OpenGraphable.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html#method_ogAuthor", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable::ogAuthor", "doc": "&quot;Get the OpenGraph author value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "fromLink": "MediaFoundry/Api/Contracts/OpenGraphable.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html#method_ogPublisher", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable::ogPublisher", "doc": "&quot;Get the OpenGraph publisher value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "fromLink": "MediaFoundry/Api/Contracts/OpenGraphable.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html#method_ogImage", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable::ogImage", "doc": "&quot;Get the OpenGraph image value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "fromLink": "MediaFoundry/Api/Contracts/OpenGraphable.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html#method_ogDescription", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable::ogDescription", "doc": "&quot;Get the OpenGraph description value.&quot;"},
            
            
            {"type": "Class", "fromName": "MediaFoundry\\Api", "fromLink": "MediaFoundry/Api.html", "link": "MediaFoundry/Api/Client.html", "name": "MediaFoundry\\Api\\Client", "doc": "&quot;MediaFoundry API Client wrapper.&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\Client", "fromLink": "MediaFoundry/Api/Client.html", "link": "MediaFoundry/Api/Client.html#method___construct", "name": "MediaFoundry\\Api\\Client::__construct", "doc": "&quot;Client constructor.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Client", "fromLink": "MediaFoundry/Api/Client.html", "link": "MediaFoundry/Api/Client.html#method_categories", "name": "MediaFoundry\\Api\\Client::categories", "doc": "&quot;Return an array of Category entities from the categories endpoint,\nor the specific category if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Client", "fromLink": "MediaFoundry/Api/Client.html", "link": "MediaFoundry/Api/Client.html#method_episodes", "name": "MediaFoundry\\Api\\Client::episodes", "doc": "&quot;Return an array of Episode entities from the episodes endpoint,\nor the specific category if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Client", "fromLink": "MediaFoundry/Api/Client.html", "link": "MediaFoundry/Api/Client.html#method_events", "name": "MediaFoundry\\Api\\Client::events", "doc": "&quot;Return an array of Event entities from the events endpoint,\nor the specific event if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Client", "fromLink": "MediaFoundry/Api/Client.html", "link": "MediaFoundry/Api/Client.html#method_genres", "name": "MediaFoundry\\Api\\Client::genres", "doc": "&quot;Return an array of Genre entities from the gendes endpoint,\nor the specific genre if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Client", "fromLink": "MediaFoundry/Api/Client.html", "link": "MediaFoundry/Api/Client.html#method_seasons", "name": "MediaFoundry\\Api\\Client::seasons", "doc": "&quot;Return an array of Season entities from the seasons endpoint,\nor the specific season if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Client", "fromLink": "MediaFoundry/Api/Client.html", "link": "MediaFoundry/Api/Client.html#method_series", "name": "MediaFoundry\\Api\\Client::series", "doc": "&quot;Search the API.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Client", "fromLink": "MediaFoundry/Api/Client.html", "link": "MediaFoundry/Api/Client.html#method_videos", "name": "MediaFoundry\\Api\\Client::videos", "doc": "&quot;Return an array of Video entities from the videos endpoint,\nor the specific video if the $entity_id is provided. If\n$filter is supplied, the return will be filtered videos.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Client", "fromLink": "MediaFoundry/Api/Client.html", "link": "MediaFoundry/Api/Client.html#method_search", "name": "MediaFoundry\\Api\\Client::search", "doc": "&quot;Search the API.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Client", "fromLink": "MediaFoundry/Api/Client.html", "link": "MediaFoundry/Api/Client.html#method_next", "name": "MediaFoundry\\Api\\Client::next", "doc": "&quot;Get the next link, if set.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Client", "fromLink": "MediaFoundry/Api/Client.html", "link": "MediaFoundry/Api/Client.html#method_previous", "name": "MediaFoundry\\Api\\Client::previous", "doc": "&quot;Get the previous link, if set.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Client", "fromLink": "MediaFoundry/Api/Client.html", "link": "MediaFoundry/Api/Client.html#method_get", "name": "MediaFoundry\\Api\\Client::get", "doc": "&quot;Perform a HTTP GET request to the given endpoint.&quot;"},
            
            {"type": "Trait", "fromName": "MediaFoundry\\Api", "fromLink": "MediaFoundry/Api.html", "link": "MediaFoundry/Api/CollectsEntities.html", "name": "MediaFoundry\\Api\\CollectsEntities", "doc": "&quot;Entity collection trait.&quot;"},
                    
            {"type": "Class", "fromName": "MediaFoundry\\Api\\Contracts", "fromLink": "MediaFoundry/Api/Contracts.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html", "name": "MediaFoundry\\Api\\Contracts\\ApiClient", "doc": "&quot;MediaFoundry API Client interface&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_categories", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::categories", "doc": "&quot;Return an array of Category entities from the categories endpoint,\nor the specific category if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_episodes", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::episodes", "doc": "&quot;Return an array of Episode entities from the episodes endpoint,\nor the specific category if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_events", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::events", "doc": "&quot;Return an array of Event entities from the events endpoint,\nor the specific event if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_genres", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::genres", "doc": "&quot;Return an array of Genre entities from the gendes endpoint,\nor the specific genre if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_seasons", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::seasons", "doc": "&quot;Return an array of Season entities from the seasons endpoint,\nor the specific season if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_search", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::search", "doc": "&quot;Search the API.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_series", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::series", "doc": "&quot;Return an array of Season entities from the seasons endpoint,\nor the specific season if the $entity_id is provided.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_videos", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::videos", "doc": "&quot;Return an array of Video entities from the videos endpoint,\nor the specific video if the $entity_id is provided. If\n$filter is supplied, the return will be filtered videos.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_next", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::next", "doc": "&quot;Get the next link, if set.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\ApiClient", "fromLink": "MediaFoundry/Api/Contracts/ApiClient.html", "link": "MediaFoundry/Api/Contracts/ApiClient.html#method_previous", "name": "MediaFoundry\\Api\\Contracts\\ApiClient::previous", "doc": "&quot;Get the previous link, if set.&quot;"},
            
            {"type": "Class", "fromName": "MediaFoundry\\Api\\Contracts", "fromLink": "MediaFoundry/Api/Contracts.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "doc": "&quot;OpenGraph interface.&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "fromLink": "MediaFoundry/Api/Contracts/OpenGraphable.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html#method_ogTitle", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable::ogTitle", "doc": "&quot;Get the OpenGraph title value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "fromLink": "MediaFoundry/Api/Contracts/OpenGraphable.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html#method_ogType", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable::ogType", "doc": "&quot;Get the OpenGraph type value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "fromLink": "MediaFoundry/Api/Contracts/OpenGraphable.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html#method_ogAuthor", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable::ogAuthor", "doc": "&quot;Get the OpenGraph author value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "fromLink": "MediaFoundry/Api/Contracts/OpenGraphable.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html#method_ogPublisher", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable::ogPublisher", "doc": "&quot;Get the OpenGraph publisher value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "fromLink": "MediaFoundry/Api/Contracts/OpenGraphable.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html#method_ogImage", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable::ogImage", "doc": "&quot;Get the OpenGraph image value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Contracts\\OpenGraphable", "fromLink": "MediaFoundry/Api/Contracts/OpenGraphable.html", "link": "MediaFoundry/Api/Contracts/OpenGraphable.html#method_ogDescription", "name": "MediaFoundry\\Api\\Contracts\\OpenGraphable::ogDescription", "doc": "&quot;Get the OpenGraph description value.&quot;"},
            
            {"type": "Class", "fromName": "MediaFoundry\\Api\\Entities", "fromLink": "MediaFoundry/Api/Entities.html", "link": "MediaFoundry/Api/Entities/Category.html", "name": "MediaFoundry\\Api\\Entities\\Category", "doc": "&quot;POPO wrapper for MediaFoundry API&#039;s Category object.&quot;"},
                    
            {"type": "Class", "fromName": "MediaFoundry\\Api\\Entities", "fromLink": "MediaFoundry/Api/Entities.html", "link": "MediaFoundry/Api/Entities/Entity.html", "name": "MediaFoundry\\Api\\Entities\\Entity", "doc": "&quot;Abstract entity provides the basis for child entity classes.&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Entity", "fromLink": "MediaFoundry/Api/Entities/Entity.html", "link": "MediaFoundry/Api/Entities/Entity.html#method___construct", "name": "MediaFoundry\\Api\\Entities\\Entity::__construct", "doc": "&quot;Entity constructor.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Entity", "fromLink": "MediaFoundry/Api/Entities/Entity.html", "link": "MediaFoundry/Api/Entities/Entity.html#method_id", "name": "MediaFoundry\\Api\\Entities\\Entity::id", "doc": "&quot;Get the entity&#039;s identifier.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Entity", "fromLink": "MediaFoundry/Api/Entities/Entity.html", "link": "MediaFoundry/Api/Entities/Entity.html#method_self", "name": "MediaFoundry\\Api\\Entities\\Entity::self", "doc": "&quot;Return the url to the entity.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Entity", "fromLink": "MediaFoundry/Api/Entities/Entity.html", "link": "MediaFoundry/Api/Entities/Entity.html#method_created", "name": "MediaFoundry\\Api\\Entities\\Entity::created", "doc": "&quot;Get the entity created datetime.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Entity", "fromLink": "MediaFoundry/Api/Entities/Entity.html", "link": "MediaFoundry/Api/Entities/Entity.html#method_changed", "name": "MediaFoundry\\Api\\Entities\\Entity::changed", "doc": "&quot;Get the entity changed datetime.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Entity", "fromLink": "MediaFoundry/Api/Entities/Entity.html", "link": "MediaFoundry/Api/Entities/Entity.html#method___isset", "name": "MediaFoundry\\Api\\Entities\\Entity::__isset", "doc": "&quot;Determine if the given key ie set.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Entity", "fromLink": "MediaFoundry/Api/Entities/Entity.html", "link": "MediaFoundry/Api/Entities/Entity.html#method___get", "name": "MediaFoundry\\Api\\Entities\\Entity::__get", "doc": "&quot;Overload __get in order to provide property access to entity methods.&quot;"},
            
            {"type": "Class", "fromName": "MediaFoundry\\Api\\Entities", "fromLink": "MediaFoundry/Api/Entities.html", "link": "MediaFoundry/Api/Entities/Episode.html", "name": "MediaFoundry\\Api\\Entities\\Episode", "doc": "&quot;POPO wrapper for MediaFoundry API&#039;s Episode object.&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Episode", "fromLink": "MediaFoundry/Api/Entities/Episode.html", "link": "MediaFoundry/Api/Entities/Episode.html#method_thumbnail", "name": "MediaFoundry\\Api\\Entities\\Episode::thumbnail", "doc": "&quot;Get the episode thumbnail.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Episode", "fromLink": "MediaFoundry/Api/Entities/Episode.html", "link": "MediaFoundry/Api/Entities/Episode.html#method_manifest", "name": "MediaFoundry\\Api\\Entities\\Episode::manifest", "doc": "&quot;Get the episode manifest URL.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Episode", "fromLink": "MediaFoundry/Api/Entities/Episode.html", "link": "MediaFoundry/Api/Entities/Episode.html#method_series", "name": "MediaFoundry\\Api\\Entities\\Episode::series", "doc": "&quot;Get the episode series instance.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Episode", "fromLink": "MediaFoundry/Api/Entities/Episode.html", "link": "MediaFoundry/Api/Entities/Episode.html#method_season", "name": "MediaFoundry\\Api\\Entities\\Episode::season", "doc": "&quot;Get the series season instance.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Episode", "fromLink": "MediaFoundry/Api/Entities/Episode.html", "link": "MediaFoundry/Api/Entities/Episode.html#method_release_date", "name": "MediaFoundry\\Api\\Entities\\Episode::release_date", "doc": "&quot;Get the series release date.&quot;"},
            
            {"type": "Class", "fromName": "MediaFoundry\\Api\\Entities", "fromLink": "MediaFoundry/Api/Entities.html", "link": "MediaFoundry/Api/Entities/Event.html", "name": "MediaFoundry\\Api\\Entities\\Event", "doc": "&quot;POPO wrapper for MediaFoundry API&#039;s Entity object.&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Event", "fromLink": "MediaFoundry/Api/Entities/Event.html", "link": "MediaFoundry/Api/Entities/Event.html#method_scheduled", "name": "MediaFoundry\\Api\\Entities\\Event::scheduled", "doc": "&quot;Is the event scheduled?&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Event", "fromLink": "MediaFoundry/Api/Entities/Event.html", "link": "MediaFoundry/Api/Entities/Event.html#method_schedule", "name": "MediaFoundry\\Api\\Entities\\Event::schedule", "doc": "&quot;Return the event schedule.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Event", "fromLink": "MediaFoundry/Api/Entities/Event.html", "link": "MediaFoundry/Api/Entities/Event.html#method_image", "name": "MediaFoundry\\Api\\Entities\\Event::image", "doc": "&quot;Get the event image.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Event", "fromLink": "MediaFoundry/Api/Entities/Event.html", "link": "MediaFoundry/Api/Entities/Event.html#method_manifest", "name": "MediaFoundry\\Api\\Entities\\Event::manifest", "doc": "&quot;Get the event manifest.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Event", "fromLink": "MediaFoundry/Api/Entities/Event.html", "link": "MediaFoundry/Api/Entities/Event.html#method_ad", "name": "MediaFoundry\\Api\\Entities\\Event::ad", "doc": "&quot;Get the event ad.&quot;"},
            
            {"type": "Class", "fromName": "MediaFoundry\\Api\\Entities", "fromLink": "MediaFoundry/Api/Entities.html", "link": "MediaFoundry/Api/Entities/Genre.html", "name": "MediaFoundry\\Api\\Entities\\Genre", "doc": "&quot;POPO wrapper for MediaFoundry API&#039;s Genre object.&quot;"},
                    
            {"type": "Class", "fromName": "MediaFoundry\\Api\\Entities", "fromLink": "MediaFoundry/Api/Entities.html", "link": "MediaFoundry/Api/Entities/Season.html", "name": "MediaFoundry\\Api\\Entities\\Season", "doc": "&quot;POPO wrapper for MediaFoundry API&#039;s Season object.&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Season", "fromLink": "MediaFoundry/Api/Entities/Season.html", "link": "MediaFoundry/Api/Entities/Season.html#method_icon", "name": "MediaFoundry\\Api\\Entities\\Season::icon", "doc": "&quot;Get the season icon.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Season", "fromLink": "MediaFoundry/Api/Entities/Season.html", "link": "MediaFoundry/Api/Entities/Season.html#method_series", "name": "MediaFoundry\\Api\\Entities\\Season::series", "doc": "&quot;Get the season&#039;s series.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Season", "fromLink": "MediaFoundry/Api/Entities/Season.html", "link": "MediaFoundry/Api/Entities/Season.html#method_episodes", "name": "MediaFoundry\\Api\\Entities\\Season::episodes", "doc": "&quot;Get the season&#039;s episodes.&quot;"},
            
            {"type": "Class", "fromName": "MediaFoundry\\Api\\Entities", "fromLink": "MediaFoundry/Api/Entities.html", "link": "MediaFoundry/Api/Entities/Series.html", "name": "MediaFoundry\\Api\\Entities\\Series", "doc": "&quot;POPO wrapper for MediaFoundry API&#039;s Series object.&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Series", "fromLink": "MediaFoundry/Api/Entities/Series.html", "link": "MediaFoundry/Api/Entities/Series.html#method_icon", "name": "MediaFoundry\\Api\\Entities\\Series::icon", "doc": "&quot;Get the series icon.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Series", "fromLink": "MediaFoundry/Api/Entities/Series.html", "link": "MediaFoundry/Api/Entities/Series.html#method_genres", "name": "MediaFoundry\\Api\\Entities\\Series::genres", "doc": "&quot;Get the series genres.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Series", "fromLink": "MediaFoundry/Api/Entities/Series.html", "link": "MediaFoundry/Api/Entities/Series.html#method_season", "name": "MediaFoundry\\Api\\Entities\\Series::season", "doc": "&quot;Get the series seasons.&quot;"},
            
            {"type": "Class", "fromName": "MediaFoundry\\Api\\Entities", "fromLink": "MediaFoundry/Api/Entities.html", "link": "MediaFoundry/Api/Entities/Video.html", "name": "MediaFoundry\\Api\\Entities\\Video", "doc": "&quot;POPO wrapper for MediaFoundry API&#039;s Video object.&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Video", "fromLink": "MediaFoundry/Api/Entities/Video.html", "link": "MediaFoundry/Api/Entities/Video.html#method_image", "name": "MediaFoundry\\Api\\Entities\\Video::image", "doc": "&quot;Get the video image URL.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Video", "fromLink": "MediaFoundry/Api/Entities/Video.html", "link": "MediaFoundry/Api/Entities/Video.html#method_manifest", "name": "MediaFoundry\\Api\\Entities\\Video::manifest", "doc": "&quot;Get the video manifest URL.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Video", "fromLink": "MediaFoundry/Api/Entities/Video.html", "link": "MediaFoundry/Api/Entities/Video.html#method_embed", "name": "MediaFoundry\\Api\\Entities\\Video::embed", "doc": "&quot;Get the video embed URL.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Video", "fromLink": "MediaFoundry/Api/Entities/Video.html", "link": "MediaFoundry/Api/Entities/Video.html#method_ogTitle", "name": "MediaFoundry\\Api\\Entities\\Video::ogTitle", "doc": "&quot;Get the OpenGraph title value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Video", "fromLink": "MediaFoundry/Api/Entities/Video.html", "link": "MediaFoundry/Api/Entities/Video.html#method_ogType", "name": "MediaFoundry\\Api\\Entities\\Video::ogType", "doc": "&quot;Get the OpenGraph type value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Video", "fromLink": "MediaFoundry/Api/Entities/Video.html", "link": "MediaFoundry/Api/Entities/Video.html#method_ogAuthor", "name": "MediaFoundry\\Api\\Entities\\Video::ogAuthor", "doc": "&quot;Get the OpenGraph author value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Video", "fromLink": "MediaFoundry/Api/Entities/Video.html", "link": "MediaFoundry/Api/Entities/Video.html#method_ogPublisher", "name": "MediaFoundry\\Api\\Entities\\Video::ogPublisher", "doc": "&quot;Get the OpenGraph publisher value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Video", "fromLink": "MediaFoundry/Api/Entities/Video.html", "link": "MediaFoundry/Api/Entities/Video.html#method_ogImage", "name": "MediaFoundry\\Api\\Entities\\Video::ogImage", "doc": "&quot;Get the OpenGraph image value.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\Entities\\Video", "fromLink": "MediaFoundry/Api/Entities/Video.html", "link": "MediaFoundry/Api/Entities/Video.html#method_ogDescription", "name": "MediaFoundry\\Api\\Entities\\Video::ogDescription", "doc": "&quot;Get the OpenGraph description value.&quot;"},
            
            {"type": "Class", "fromName": "MediaFoundry\\Api", "fromLink": "MediaFoundry/Api.html", "link": "MediaFoundry/Api/EventSchedule.html", "name": "MediaFoundry\\Api\\EventSchedule", "doc": "&quot;EventSchedule value object.&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\EventSchedule", "fromLink": "MediaFoundry/Api/EventSchedule.html", "link": "MediaFoundry/Api/EventSchedule.html#method___construct", "name": "MediaFoundry\\Api\\EventSchedule::__construct", "doc": "&quot;EventSchedule constructor.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\EventSchedule", "fromLink": "MediaFoundry/Api/EventSchedule.html", "link": "MediaFoundry/Api/EventSchedule.html#method_start", "name": "MediaFoundry\\Api\\EventSchedule::start", "doc": "&quot;Get the scheduled start datetime.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\EventSchedule", "fromLink": "MediaFoundry/Api/EventSchedule.html", "link": "MediaFoundry/Api/EventSchedule.html#method_end", "name": "MediaFoundry\\Api\\EventSchedule::end", "doc": "&quot;Get the scheduled end datetime.&quot;"},
            
            {"type": "Class", "fromName": "MediaFoundry\\Api", "fromLink": "MediaFoundry/Api.html", "link": "MediaFoundry/Api/MediaFoundryApiClientServiceProvider.html", "name": "MediaFoundry\\Api\\MediaFoundryApiClientServiceProvider", "doc": "&quot;MediaFoundry API service provider.&quot;"},
                                                        {"type": "Method", "fromName": "MediaFoundry\\Api\\MediaFoundryApiClientServiceProvider", "fromLink": "MediaFoundry/Api/MediaFoundryApiClientServiceProvider.html", "link": "MediaFoundry/Api/MediaFoundryApiClientServiceProvider.html#method_boot", "name": "MediaFoundry\\Api\\MediaFoundryApiClientServiceProvider::boot", "doc": "&quot;Perform post-registration booting of services.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\MediaFoundryApiClientServiceProvider", "fromLink": "MediaFoundry/Api/MediaFoundryApiClientServiceProvider.html", "link": "MediaFoundry/Api/MediaFoundryApiClientServiceProvider.html#method_register", "name": "MediaFoundry\\Api\\MediaFoundryApiClientServiceProvider::register", "doc": "&quot;Register the service provider.&quot;"},
                    {"type": "Method", "fromName": "MediaFoundry\\Api\\MediaFoundryApiClientServiceProvider", "fromLink": "MediaFoundry/Api/MediaFoundryApiClientServiceProvider.html", "link": "MediaFoundry/Api/MediaFoundryApiClientServiceProvider.html#method_provides", "name": "MediaFoundry\\Api\\MediaFoundryApiClientServiceProvider::provides", "doc": "&quot;Get the services provided by the provider.&quot;"},
            
            
                                        // Fix trailing commas in the index
        {}
    ];

    /** Tokenizes strings by namespaces and functions */
    function tokenizer(term) {
        if (!term) {
            return [];
        }

        var tokens = [term];
        var meth = term.indexOf('::');

        // Split tokens into methods if "::" is found.
        if (meth > -1) {
            tokens.push(term.substr(meth + 2));
            term = term.substr(0, meth - 2);
        }

        // Split by namespace or fake namespace.
        if (term.indexOf('\\') > -1) {
            tokens = tokens.concat(term.split('\\'));
        } else if (term.indexOf('_') > 0) {
            tokens = tokens.concat(term.split('_'));
        }

        // Merge in splitting the string by case and return
        tokens = tokens.concat(term.match(/(([A-Z]?[^A-Z]*)|([a-z]?[^a-z]*))/g).slice(0,-1));

        return tokens;
    };

    root.Sami = {
        /**
         * Cleans the provided term. If no term is provided, then one is
         * grabbed from the query string "search" parameter.
         */
        cleanSearchTerm: function(term) {
            // Grab from the query string
            if (typeof term === 'undefined') {
                var name = 'search';
                var regex = new RegExp("[\\?&]" + name + "=([^&#]*)");
                var results = regex.exec(location.search);
                if (results === null) {
                    return null;
                }
                term = decodeURIComponent(results[1].replace(/\+/g, " "));
            }

            return term.replace(/<(?:.|\n)*?>/gm, '');
        },

        /** Searches through the index for a given term */
        search: function(term) {
            // Create a new search index if needed
            if (!bhIndex) {
                bhIndex = new Bloodhound({
                    limit: 500,
                    local: searchIndex,
                    datumTokenizer: function (d) {
                        return tokenizer(d.name);
                    },
                    queryTokenizer: Bloodhound.tokenizers.whitespace
                });
                bhIndex.initialize();
            }

            results = [];
            bhIndex.get(term, function(matches) {
                results = matches;
            });

            if (!rootPath) {
                return results;
            }

            // Fix the element links based on the current page depth.
            return $.map(results, function(ele) {
                if (ele.link.indexOf('..') > -1) {
                    return ele;
                }
                ele.link = rootPath + ele.link;
                if (ele.fromLink) {
                    ele.fromLink = rootPath + ele.fromLink;
                }
                return ele;
            });
        },

        /** Get a search class for a specific type */
        getSearchClass: function(type) {
            return searchTypeClasses[type] || searchTypeClasses['_'];
        },

        /** Add the left-nav tree to the site */
        injectApiTree: function(ele) {
            ele.html(treeHtml);
        }
    };

    $(function() {
        // Modify the HTML to work correctly based on the current depth
        rootPath = $('body').attr('data-root-path');
        treeHtml = treeHtml.replace(/href="/g, 'href="' + rootPath);
        Sami.injectApiTree($('#api-tree'));
    });

    return root.Sami;
})(window);

$(function() {

    // Enable the version switcher
    $('#version-switcher').change(function() {
        window.location = $(this).val()
    });

    
        // Toggle left-nav divs on click
        $('#api-tree .hd span').click(function() {
            $(this).parent().parent().toggleClass('opened');
        });

        // Expand the parent namespaces of the current page.
        var expected = $('body').attr('data-name');

        if (expected) {
            // Open the currently selected node and its parents.
            var container = $('#api-tree');
            var node = $('#api-tree li[data-name="' + expected + '"]');
            // Node might not be found when simulating namespaces
            if (node.length > 0) {
                node.addClass('active').addClass('opened');
                node.parents('li').addClass('opened');
                var scrollPos = node.offset().top - container.offset().top + container.scrollTop();
                // Position the item nearer to the top of the screen.
                scrollPos -= 200;
                container.scrollTop(scrollPos);
            }
        }

    
    
        var form = $('#search-form .typeahead');
        form.typeahead({
            hint: true,
            highlight: true,
            minLength: 1
        }, {
            name: 'search',
            displayKey: 'name',
            source: function (q, cb) {
                cb(Sami.search(q));
            }
        });

        // The selection is direct-linked when the user selects a suggestion.
        form.on('typeahead:selected', function(e, suggestion) {
            window.location = suggestion.link;
        });

        // The form is submitted when the user hits enter.
        form.keypress(function (e) {
            if (e.which == 13) {
                $('#search-form').submit();
                return true;
            }
        });

    
});


