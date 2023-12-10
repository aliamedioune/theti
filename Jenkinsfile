pipeline {
    agent any

    environment {
        DOCKER_COMPOSE_FILE = '/var/lib/jenkins/workspace/CICD/docker-compose.yml'
        APP_ENV = 'dev'
    }

    stages {
        stage('Clean Workspace') {
            steps {
                script {
                    // Nettoyer les fichiers non suivis dans le répertoire de travail
                    sh 'sudo git clean -fdx'
                    sh 'sudo chmod -R 755 /var/lib/jenkins/workspace/CICD/'
                }
            }
        }
        stage('Change Ownership') {
            steps {
                script {
                    sh 'sudo usermod -aG docker jenkins'
                    sh 'sudo whoami'
                    sh 'sudo id'
                    sh 'sudo pwd'
                    sh 'sudo ls -l /var/lib/jenkins/workspace/CICD/'
                    sh 'sudo chown -R jenkins:jenkins /var/lib/jenkins/workspace/CICD || true'
                    sh 'sudo ls -l /var/lib/jenkins/workspace/CICD/'
                }
            }
        }
        stage('Get Repo') {
            steps {
                echo 'Cloning repository...'
                script {
                    checkout([$class: 'GitSCM', branches: [[name: 'master']], 
                              doGenerateSubmoduleConfigurations: false, 
                              extensions: [[$class: 'RelativeTargetDirectory', 
                                            relativeTargetDir: '']], 
                              submoduleCfg: [], 
                              userRemoteConfigs: [[credentialsId: 'GitHub-SSH-Key', 
                                                  url: 'https://github.com/alexdoe99/theti.git']]])
                }
            }
        }


        stage('Clean Docker') {
            steps {
                echo 'Stopping and removing containers...'
                script {
                    sh "docker-compose -f $DOCKER_COMPOSE_FILE -p $APP_ENV down --volumes"
                }
                
            }
        }

        stage('Build UP') {
            steps {
                echo 'Building and starting new containers...'
                script {
                    sh "docker-compose -f $DOCKER_COMPOSE_FILE up -d"
                }
                echo 'Clearing Symfony cache...'
                script {
                    sh 'docker exec symfony_app php bin/console cache:clear'
                }
                
            }
        }

        stage('Test') {
            steps {
                echo 'Running tests...'
                script {
                    sh 'cd /var/lib/jenkins/workspace/CICD && phpunit --log-junit result.xml UnitTestFiles/Test/'
                }
            }
        }
    }
        
}
