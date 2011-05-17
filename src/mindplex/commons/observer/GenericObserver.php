<?php

/**
 * Copyright (C) 2011 Mindplex Media, LLC.
 *
 * Licensed under the Apache License, Version 2.0 (the "License"); you may not use this
 * file except in compliance with the License. You may obtain a copy of the License at
 *
 *     http://www.apache.org/licenses/LICENSE-2.0
 *
 * Unless required by applicable law or agreed to in writing, software distributed
 * under the License is distributed on an "AS IS" BASIS, WITHOUT WARRANTIES OR
 * CONDITIONS OF ANY KIND, either express or implied. See the License for the
 * specific language governing permissions and limitations under the License.
 */
 
/**
 * GenericObserver that echos the value of the state that this observer is notified 
 * about.
 *
 * @see Observer for complete documentation.
 *
 * @package mindplex-commons-observer
 * @author Abel Perez
 */ 
class GenericObserver implements Observer
{
    /**
     * Echo's the value of the specified state that 
     * changed.
     *
     * @state object $state the monitored state that 
     * changed.
     */
    public function notify($state) {
        echo "received notification of state change: ".$state."<br />";	
    }
}

?>